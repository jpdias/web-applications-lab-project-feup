<?php
try
{
	include_once('../config/init.php');
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../resources/logo.ico">

    <title>Gestorax - Inventory Management</title>

     <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img href="" src="../resources/logo.png" style="width:6%;hight:6%">  Gestorax - Inventory Management</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
			<button type="submit" class="btn btn-primary">Sign up</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  
	<!-- Search Categories -->
	<div id="content">
		<div id="container" class="container">
			<div class="row">
				<!-- Results list and tabular data -->
				<br><br><br><h1>&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-search"></i>  Search Results</h1>
				
				<br><div class="span9" id="results-main">
					<?php
					try
					{
						$whereStmt = "";


						if (isset($_GET['tags']) && $_GET['tags'] != '')
						{
							$tag = strtok($_GET['tags'], ",");
							
							while ($tag != false)
							{
								if($whereStmt == "")
								{
									$whereStmt = $whereStmt . ' where (name like \'%' . $tag . '%\'';
								}
								else
								{
									$whereStmt = $whereStmt . ' or name like \'%' . $tag . '%\'';
								}
								
								$tag = strtok(",");
							}
							
							
							if(isset($_GET['onlyavailableitems']) && $_GET['onlyavailableitems'] == "yes")
							{
								$whereStmt = $whereStmt . ' and currentstatus = ' . '\'available\'';
							}
							
							
							if($whereStmt != "")
							{
								$whereStmt = $whereStmt . ')';
							}
							
							
							$starttime = microtime(true);
							
							
							$stmt = $conn->prepare('
							select name, image, description, qrcode, currentstatus
							from item' . $whereStmt);
							$stmt->execute();
							$stmt->setFetchMode(PDO::FETCH_ASSOC);
							$result = $stmt->fetchAll();
							
							
							$endtime = microtime(true);
							
							
							$timeelapsed = $endtime - $starttime;
							
							
							echo '<h4><small>' . count($result) . ' Result(s) for tags ' . $_GET['tags'] . ' in ' . number_format((float) $timeelapsed, 2, '.', '') . ' ms</small></h4>';


							for($i = 0; $i < count($result); ++$i)
							{
							?>
								<!-- part results -->
					<div id="results" class="results-on">
						
						<section class="result-part">
							<img id="result-thumb" class="pull-left" src=" <?php echo $result[$i]['image']; ?> ">
							<h3><a href="#" class="view-detail"> <?php echo $result[$i]['name']; ?> </a>
							</h3>
							<p class="short-desc pull-left"> <?php echo $result[$i]['description']; ?> </p>
							<div class="price-avail pull-right">
								<!-- star rating inputs -->
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star" checked="checked">
								<!-- price and availability -->
								<p class="avail">Availability: <?php echo $result[$i]['currentstatus']; ?> </p>
								<button class="btn btn-success">Request <i class="glyphicon glyphicon-tag"></i></button>
							</div>
							</section>
							<?php
							}
						}
						else
						{
							if (isset($_GET['itemnumber']) && $_GET['itemnumber'] != '')
						{
							$whereStmt = ' where (idItem = ' . $_GET['itemnumber'];
							
							
							if(isset($_GET['onlyavailableitems']) && $_GET['onlyavailableitems'] == "yes")
							{
								$whereStmt = $whereStmt . ' and currentstatus = ' . '\'available\'';
							}
							
							
							if($whereStmt != "")
							{
								$whereStmt = $whereStmt . ')';
							}
							
							
							$starttime = microtime(true);
							
							
							$stmt = $conn->prepare('
							select name, image, description, qrcode, currentstatus
							from item' . $whereStmt);
							$stmt->execute();
							$stmt->setFetchMode(PDO::FETCH_ASSOC);
							$result = $stmt->fetchAll();
							
							
							$endtime = microtime(true);
							
							
							$timeelapsed = $endtime - $starttime;
							
							
							echo '<h4><small>' . count($result) . ' Result(s) for item number ' . $_GET['itemnumber'] . ' in ' . number_format((float) $timeelapsed, 2, '.', '') . ' ms</small></h4>';


							for($i = 0; $i < count($result); ++$i)
							{
							?>
								<!-- part results -->
					<div id="results" class="results-on">
						
						<section class="result-part">
							<img id="result-thumb" class="pull-left" src=" <?php echo $result[$i]['image']; ?> ">
							<h3><a href="#" class="view-detail"> <?php echo $result[$i]['name']; ?> </a>
							</h3>
							<p class="short-desc pull-left"> <?php echo $result[$i]['description']; ?> </p>
							<div class="price-avail pull-right">
								<!-- star rating inputs -->
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star">
								<input name="rating1" type="radio" class="star" checked="checked">
								<!-- price and availability -->
								<p class="avail">Availability: <?php echo $result[$i]['currentstatus']; ?> </p>
								<button class="btn btn-success">Request <i class="glyphicon glyphicon-tag"></i></button>
							</div>
							</section>
							<?php
							}
						}
						}
					}
					catch (Exception $e)
					{
						echo $e->getMessage();
					}
					?>
		          	<br>
				</div>
			</div>
		</div>
	</div>

    </div> <!-- /container -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../javascript/jquery.js"></script>
  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../javascript/bootstrap.js"></script>
  <script src="../javascript/plugins.js"></script>
  </body>
  
  </body>
</html>