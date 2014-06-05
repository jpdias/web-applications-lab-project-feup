<!-- Custom styles for this template -->

<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">
<script src="../javascript/jPages.js"></script>


      <!-- Results list and tabular data -->

	  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		  <br>
		  <br>
		  <br>
		 <div class="col-md-12">
		  <div class="col-md-3">
		  <h2>
			&nbsp;&nbsp;&nbsp;
			<i class="glyphicon glyphicon-search"></i>
			Search
		  </h2>
		  </div>
		  <div class="col-md-9">
			  <div class="col-md-6">
				<form class="body-form" role="search" method="get" action="../pages/user_search.php">
			<div class="input-group">
			  <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Add tags" name="srch-term" id="srch-term">
			  <div class="input-group-btn">
				<button class="btn btn-default" type="submit">
				  <i class="glyphicon glyphicon-search">
				  </i>
				</button>
			  </div>
			</div>
			<br>
			  <h4>{$resultsCount} result(s) for {$resultsParameter} in {$resultsTimeElapsed} ms</h4>

			  </form>
			  </div>

		  </div>
	    </div>


	  <div class="col-md-12">

	   <hr>
	  </div>
      <div class="col-md-12" id="results-main">

        <ul id="itemContainer" style="list-style: none">

			{foreach $results as $result}

			 <li>
			  <div class="col-md-12" style="padding-top:30px">
			  <div class="col-md-6">
			  <div class="col-md-6">
				<img id="result-thumb" src="{$result.image}">
			  </div>
			   <div class="col-md-6">
				<h3>
				  <a href="#" class="view-detail">

					{$result.name}

				  </a>
				</h3>


				  {$result.description}

				</div>

			  </div>
			  <div class="col-md-6" style="text-align:right;float:right">

					{if $result.currentstatus == 'available'}
						Availability: {$result.currentstatus}
						<br>
						<br>
						<button class="btn btn-success" data-toggle="modal" data-target="#requestItemModal" onclick="document.getElementById('itemidinput').value = {$result.iditem}">
							<i class="glyphicon glyphicon-tag">
							</i>
							Request
						</button>
					{else}
						Availability: {$result.currentstatus}
						<br>
						<br>
						<button class="btn btn-primary" data-toggle="modal" data-target="#reserverModal">
							<i class="glyphicon glyphicon-tag">
							</i>
							Reserve
						</button>
					{/if}

				</div>

			  </div>

			  </li>

			  {/foreach}

		</ul>
		<div  class="col-md-12" style="margin-top:30px;">
		<center>
		<h4><div class="holder" ></div></h4>
		</center>
		</div>
      </div>
    </div>

	<div class="modal fade" id="requestItemModal" tabindex="-1" role="dialog" aria-labelledby="requestItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="requestItemModalLabel">
              Request Item
            </h3>
          </div>
          <form action="../actions/request_add.php" method="post">
            <input type="hidden" id="readeridinput" name="readerid" value="{$readerid}">
			<input type="hidden" id="itemidinput" name="itemid" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>

                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to request this item?
                  </div>

                  <br>
                </div>

				<div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Comment
                    </span>
                    <input type="text" class="form-control" name="comment" placeholder="Comment">
                  </div>

                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                No
              </button>
              <button type="submit" class="btn btn-success">
                Yes
              </button>
            </form>
          </div>
        </div>
      </div>


<script>
$(document).ready(function () {

$("div.holder").jPages({
containerID: "itemContainer",
perPage: 5
});
});
</script>
