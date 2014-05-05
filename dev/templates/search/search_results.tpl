<!-- Custom styles for this template -->
<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<div id="content">
  <div id="container" class="container">
    <div class="row">
      <!-- Results list and tabular data -->
      <br>
      <br>
      <br>
      <h1>
        &nbsp;&nbsp;&nbsp;
        <i class="glyphicon glyphicon-search">
        </i>
        Search Results
      </h1>
	  
	  <br>
	  &nbsp;&nbsp;&nbsp;
	  {$resultsCount} result(s) for {$resultsParameter} in {$resultsTimeElapsed} ms
      
      <br>
      <div class="span9" id="results-main">
        
        <div id="results" class="results-on">
          
          {foreach $results as $result}
          
          <section class="result-part">
            <img id="result-thumb" class="pull-left" src="{$result.image}">
            <h3>
              <a href="#" class="view-detail">
                
                {$result.name}
                
              </a>
            </h3>
            <p class="pull-left">
              
              {$result.description}
              
            </p>
            <p class="pull-right">
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
            </p>
          </section>
          
          {/foreach}
        
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
    </div>
	
  </div>
</div>