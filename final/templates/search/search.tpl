<!-- Custom styles for this template -->
<link href="../css/search.css" rel="stylesheet">
<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">

<!-- Model for in-line help -->
<div class="modal fade" id="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title"><i>Advanced Search</i></h4>
      </div>
      <div class="modal-body">
        <div class="te">
          <p>
            Once in Advance you have the option to either search your items by <i>Tag</i> (as in the default search bar) or by <i>Item Number</i>.
          </p>
          <p>
            As an advantage to the search done by <i>Tag</i>, using the search by <i>Item Number</i> will be quicker and more efeciente if you already know the number of the item you are going to request.
          </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <form class="form-signin" role="form" method="get" action="../pages/search_results.php">
    <h1>
      <i class="glyphicon glyphicon-search">
      </i>
      Search
      <a class="" data-toggle="modal" href="formal.html" data-target="#modal">
        <i class="glyphicon glyphicon-question-sign"></i>
      </a>
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