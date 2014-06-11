<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1>
    <i class="glyphicon glyphicon-search">
    </i>
    Search Items
  </h1>
  <div class="col-md-7">
      <div class="input-group">
        <div class="input-group-btn">
          <script src="../javascript/dropdown.js"></script>
          <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">
            <span class="caret">
            </span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a onclick="document.getElementById('searchtype').value = 'itemnumber'">
                Item Number
              </a>
            </li>
			<li>
              <a onclick="document.getElementById('searchtype').value = 'tags'">
                Item Name
              </a>
            </li>
            <li>
              <a onclick="document.getElementById('searchtype').value = 'description'">
                Item Description
              </a>
            </li>
          </ul>
        </div>
        <form class="body-form" role="search" method="get" action="../pages/manager_items_search_results.php">
		<input type="hidden" id="id" name="id" value="{$IDMANAGER}">
		<input type="hidden" id="searchtype" name="searchtype" value="itemnumber">
		<input type="text" class="form-control" placeholder="Search" name="searchfield" id="searchfield">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search">
            </i>
          </button>
        </div>
		</form>
      </div>
    <br>
  </div>
  <div class="col-md-4" style="margin-left:5px;float:right;">
 <button class="btn btn-md btn-success" data-toggle="modal" data-target="#addItemModal">
      <i class="glyphicon glyphicon-plus">
      </i>
      Add Item
    </button>
    <br>
  </div>
  <div class="col-md-6" >
    <h2 class="sub-header">
      Active items
    </h2>
    <div class="table-responsive" style="max-height:400px;overflow:auto">
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
    <div class="table-responsive" style="max-height:400px;overflow:auto">
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
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_item.php?id={$IDMANAGER}&itemid={$newitem.iditem}'">
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
    <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#addItemModal">
      <i class="glyphicon glyphicon-plus">
      </i>
      Add Item
    </button>
  </h4>
</div>

<div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h3 class="modal-title" id="addItemModalLabel">
          Add Item
        </h3>
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