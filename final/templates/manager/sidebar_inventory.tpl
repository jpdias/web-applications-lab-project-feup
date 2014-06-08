<!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">
<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">
<style>
.bootstrap-tagsinput {
    width: 150px;
}
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li>
          <a href="../pages/manager_dash.php?id={$IDMANAGER}">
            Overview
          </a>
        </li>
        <li>
          <a href="../pages/manager_statistics.php?id={$IDMANAGER}">
            Statistics
          </a>
        </li>
        <li>
          <a href="../pages/manager_profile.php?id={$IDMANAGER}">
            My profile
          </a>
        </li>
		<li class="active">
          <a href="../pages/manager_items.php?id={$IDMANAGER}">
            Inventory
          </a>
        </li>
		<li>
          <a href="../pages/manager_requests.php?id={$IDMANAGER}">
            Requests
          </a>
        </li>
        <li>
          <a href="../pages/manager_users.php?id={$IDMANAGER}">
            Users
          </a>
        </li>
		<li>
          <a href="../pages/manager_alerts.php?id={$IDMANAGER}">
            Alerts
          </a>
        </li>
      </ul>
      <form class="body-form" role="search" method="get" action="../pages/search_results.php">
        <div class="input-group add-on">
          <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Add tags" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search">
              </i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="../javascript/docs.min.js">
</script>