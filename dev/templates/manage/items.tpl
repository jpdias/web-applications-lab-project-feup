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
        <li class="active">
          <a href="#">
            Inventory
          </a>
        </li>
        <li>
          <a href="#">
            Statistics
          </a>
        </li>
        <li>
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
        Search Items
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
                    Item Title
                  </a>
                </li>
                <li>
                  <a href="#">
                    Item Description
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
          Active items
        </h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Title
                </th>
                <th>
                  Description
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
                  {$result.iditem}
                </td>
                <td>
                  {$result.name}
                </td>
                <td>
                  {$result.description}
                </td>
                <th>
                  <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_item.php?itemid={$result.iditem}'">
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
          New Items
        </h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Title
                </th>
                <th>
                  Description
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
                  {$result.iditem}
                </td>
                <td>
                  {$result.name}
                </td>
                <td>
                  {$result.description}
                </td>
                <th>
                  <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_item.php?itemid={$result.iditem}'">
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
      <br>
      <br>
      <br>
      <br>
      <h4>
        <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">
          <i class="glyphicon glyphicon-plus">
          </i>
          Add Item
        </button>
      </h4>
    </div>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              New Item
            </h4>
          </div>
          <div class="row">
              <br>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Title
                  </span>
                  <input type="text" class="form-control" placeholder="{$result.name}">
                </div>
                
                <br>
              </div>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Description
                  </span>
                  <input type="text" class="form-control" placeholder="Item Description">
                </div>
                
                <br>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="../javascript/docs.min.js">
</script>