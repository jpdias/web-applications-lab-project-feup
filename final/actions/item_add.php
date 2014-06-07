<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	
	define ("MAX_SIZE", "1000000"); // in bytes
	
	
	if($_POST['itemname'] != "" && $_POST['itemdescription'] != "")
	{
		$itemid = count(getAllItems()) + 1;
		
		
		$image = $_FILES['file']['name'];
		
		$error = 0;

		if($image)
		{
			$filename = stripslashes($_FILES['file']['name']);

			$extension = end((explode(".", $image)));

			$extension = strtolower($extension);

			if (($extension != "jpg") && ($extension != "jpeg"))
			{
				$_SESSION['error_messages'][] = 'Image file extension not supported!';
			}
			else
			{
				$size = filesize($_FILES['file']['tmp_name']);

				if ($size > MAX_SIZE)
				{
					$_SESSION['error_messages'][] = 'Image file size too large (cannot exceed 1MB)!';
				}
				else
				{
					$name = time() . '.' . $extension;

					$newname = "../resources/" . $name;
					

					$uploaded = move_uploaded_file($_FILES['file']['tmp_name'], $newname);
					
					chmod($newname, 0755);
					

					if ($uploaded)
					{
						addItem($itemid, $_POST['itemname'], $_POST['itemdescription']);
						
						
						editItemImage($itemid, $newname);
						
						
						$_SESSION['success_messages'][] = 'Item added successfully!';
					}
					else
					{
						$_SESSION['error_messages'][] = 'Error uploading image file!';
						
						$error = 1;
					}
				}
			}
		}
		else
		{
			if($error == 0)
			{
				addItem($itemid, $_POST['itemname'], $_POST['itemdescription']);
				
				$_SESSION['success_messages'][] = 'Item added successfully!';
			}
		}
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error adding item!';
	}
	
	
	header('Location: ../pages/manager_items.php?id=' . $_SESSION['idmanager'] . '');
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>