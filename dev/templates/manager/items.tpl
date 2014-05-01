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
                Item Name
              </a>
            </li>
            <li>
              <a href="#">
                Item Description
              </a>
            </li>
			<li>
              <a href="#">
                Item Number
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
          {foreach $activeitems as $activeitem}
          <tr>
            <td>
              {$activeitem.iditem}
            </td>
            <td>
              {$activeitem.name}
            </td>
            <td>
              {$activeitem.description}
            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_item.php?id={$IDMANAGER}&itemid={$activeitem.iditem}'">
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
          {foreach $newitems as $newitem}
          <tr>
            <td>
              {$newitem.iditem}
            </td>
            <td>
              {$newitem.name}
            </td>
            <td>
              {$newitem.description}
            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_item.php?itemid={$newitem.iditem}'">
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
          Add Item
        </h4>
        <form action="../actions/item_add.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <br>
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                  Item Name
                </span>
                <input type="text" class="form-control" name="itemname" placeholder="Item Name">
              </div>
              <br>
            </div>
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                  Item Description
                </span>
                <input type="text" class="form-control" name="itemdescription" placeholder="Item Description">
              </div>
              <br>
            </div>
            <div class="col-md-12">
              <br>
              <div class="input-group">
				<h4>Item Image:</h4>
                <input type="file" name="file" id="file">
              </div>
            </div>
            <br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-success">
              Save changes
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>