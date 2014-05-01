<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	
	define ("MAX_SIZE", "1000000"); // in bytes

	
	if($_POST['itemid'] != "")
	{
		$image = $_FILES['file']['name'];

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
						editItemImage($_POST['itemid'], $newname);
						
						
						$_SESSION['success_messages'][] = 'Item image edited successfully!';  
					}
					else
					{
						$_SESSION['error_messages'][] = 'Error uploading image file!';
					}
				}
			}
		}
		else
		{
			$_SESSION['error_messages'][] = 'No image file selected!';
		}
	}
	
	
	header('Location: ../pages/manager_item.php?id=' . $_SESSION['idmanager'] . '&itemid=' . $_POST['itemid']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>