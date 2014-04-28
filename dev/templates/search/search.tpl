<!-- Custom styles for this template -->
<link href="../css/search.css" rel="stylesheet">
<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="get" action="../pages/search_results.php">
    <h1>
      <i class="glyphicon glyphicon-search">
      </i>
      Search
    </h1>
  </br>
  <h4>
    Using tags
  </h4>
  <input name="tags" type="text" value="" data-role="tagsinput" placeholder="Add tags"/>
  <br>
  <br>
  <h4>
    Or using item number
  </h4>
  <input name="itemnumber" type="number" class="form-control" placeholder="Enter item number">
  <br>
  <br>
  <label class="checkbox">
    <input name="onlyavailableitems" type="checkbox" value="yes">
    Search only available items.
  </label>
  <button class="btn btn-lg btn-info btn-block" type="submit">
    Search
  </button>
</form>
</div>
</div>