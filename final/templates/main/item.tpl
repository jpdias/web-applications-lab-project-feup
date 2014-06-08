<div class="container" style="margin-top:60px;">
  {foreach $items as $item}
  <div class="row">
    
    <div class="col-md-12">
      <br>
      <h1>
        #{$item.iditem} - {$item.name}
      </h3>
      </h1>
      <br>
      <hr>
      <br>
    </div>
    <div class="col-md-4">
      <img src="{$item.image}" style="width:80%"/>
    </div>
    <div class="col-md-6">
	  <br>
      <h2>
        Description:
      </h2>
      <h3>
        {$item.description}
      </h3>
      <br>
      <h3>
        Current Status: {$item.currentstatus}
      </h3>
    </div>
	<br>
	<br>
    <div class="col-md-2" style="float:right;">
      <h3>
        I want it:
      </h3>
      {if $item.currentstatus == 'available'}
      <button class="btn btn-success" data-toggle="modal" data-target="#requestItemModal" onclick="document.getElementById('requestitemidinput').value = {$item.iditem}">
        <i class="glyphicon glyphicon-tag">
        </i>
        Request
      </button>
      {else}
      <button class="btn btn-primary" data-toggle="modal" data-target="#reserveItemModal" onclick="document.getElementById('reserveitemidinput').value = {$item.iditem}">
        <i class="glyphicon glyphicon-tag">
        </i>
        Reserve 
      </button>
      {/if}
	  <br>
	  <br>
	  {if $managerid != "" && $requestsopencount != 0}
	  <h3>
        Options:
      </h3>
	  <button class="btn btn-primary" data-toggle="modal" data-target="#deliverItemModal" onclick="document.getElementById('requestidinput').value = {$requests[0].idrequisition};document.getElementById('itemidinput').value = {$requests[0].iditem}">
		  Deliver Item
      </button>
	  {/if}
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
			<input type="hidden" id="requestitemidinput" name="itemid" value="0">
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
	
	<div class="modal fade" id="reserveItemModal" tabindex="-1" role="dialog" aria-labelledby="reserveItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="reserveItemModalLabel">
              Reserve Item
            </h3>
          </div>
          <form action="../actions/reserve_add.php" method="post">
            <input type="hidden" id="readeridinput" name="readerid" value="{$readerid}">
			<input type="hidden" id="reserveitemidinput" name="itemid" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to reserve this item?
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
	
	<div class="modal fade" id="deliverItemModal" tabindex="-1" role="dialog" aria-labelledby="deliverItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="deliverItemModalLabel">
              Deliver Item
            </h3>
          </div>
          <form action="../actions/request_deliver.php" method="post">
			<input type="hidden" id="requestidinput" name="requestid" value="0">
			<input type="hidden" id="itemidinput" name="itemid" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to deliver this item?
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
  
  <hr>
  
  <br>
  <h3><a onclick="goBack()"">Back to search results</a></h3>
  <br>
  
  {/foreach}
</div>

<script>
function goBack() {
    window.history.back()
}
</script>