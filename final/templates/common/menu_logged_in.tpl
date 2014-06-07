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
		{if $IDMANAGER == ""}
		  <a type="submit" href="../pages/user_dash.php?id={$IDREADER}">{$USERNAME}'s Control Panel</a>
		{else}
		  <a type="submit" href="../pages/manager_dash.php?id={$IDMANAGER}">{$USERNAME}'s Control Panel</a>
		{/if}
        </div>
        <button type="submit" class="btn btn-danger">
          Sign out
        </button>
      </form>
    </div>
  </div>
</div>