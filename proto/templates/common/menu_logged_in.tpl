<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">
          Toggle navigation
        </span>
        <span class="icon-bar">
        </span>
        <span class="icon-bar">
        </span>
        <span class="icon-bar">
        </span>
      </button>
      <a class="navbar-brand" href="main.php">
        <img href="" src="../resources/logo.png" style="width:6%;hight:6%">
        Gestorax - Inventory Management
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <form class="navbar-form navbar-right" role="form" method="post" action="../actions/logout.php">
        <div class="form-group">
			<a type="submit" href="../pages/user_dash.php">Hello, {$USERNAME}!</a>
        </div>
       <button type="submit" class="btn btn-primary">
          Sign out
        </button>
      </form>
    </div>
  </div>
</div>