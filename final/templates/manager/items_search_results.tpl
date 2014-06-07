<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1>
    <i class="glyphicon glyphicon-search">
    </i>
    Search Items
  </h1>
  <div class="col-md-8">
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
  <div class="col-md-4">
    <br>
  </div>
  <div class="col-md-6">
    <h2 class="sub-header">
      Search Results
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
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_item.php?id={$IDMANAGER}&itemid={$result.iditem}'">
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