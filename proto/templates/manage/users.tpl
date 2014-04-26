<!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li>
          <a href="#">
            Overview
          </a>
        </li>
        <li>
          <a href="#">
            Inventory
          </a>
        </li>
        <li>
          <a href="#">
            Statistics
          </a>
        </li>
        <li class="active">
          <a href="#">
            Users
          </a>
        </li>
        <li>
          <a href="#">
            My profile
          </a>
        </li>
      </ul>
      <form class="body-form" role="search">
        <div class="input-group add-on">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search">
              </i>
              </button>
            </div>
            </div>
          </form>
        </div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		  <h1>
            <i class="glyphicon glyphicon-search">
            </i>
            Search Users
          </h1>
          <div class="col-md-8">
            <form>
              <div class="input-group">
                <div class="input-group-btn">
                  
                  <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">
                    Everything 
                    <span class="caret">
                    </span>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">
                        Name
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        City
                      </a>
                    </li>
                  </ul>
                </div>
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search">
                    </i>
                  </button>
                </div>
              </div>
            </form>
            <br>
          </div>
          <div class="col-md-4">
            <br>
          </div>
          <div class="col-md-6">
            <h2 class="sub-header">
              Active users
            </h2>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Info
                    </th>
                  </tr>
                </thead>
                <tbody>
				{foreach $results as $result}
                  <tr>
                    <td>
                      {$result.idreader}
                    </td>
                    <td>
                      {$result.firstname} {$result.lastname}
                    </td>
                    <td>
                      {$result.email}
                    </td>
                    <th>
                      <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_user.php?readerid={$result.idreader}'">
                        <i class="glyphicon glyphicon-plus">
                        </i>
                      </button>
                    </th>
                  </tr>
				  {/foreach}
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="sub-header">
              New Users
            </h2>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Info
                    </th>
                  </tr>
                </thead>
                <tbody>
				  {foreach $results as $result}
				  <tr>
					<td>
					  {$result.idreader}
					</td>
					<td>
					  {$result.firstname} {$result.lastname}
					</td>
					<td>
					  {$result.email}
					</td>
					<th>
					  <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_user.php?readerid={$result.idreader}'">
						<i class="glyphicon glyphicon-plus">
						</i>
					  </button>
					</th>
				  </tr>
				  {/foreach}
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
</div>


<script src="../javascript/docs.min.js">
</script>