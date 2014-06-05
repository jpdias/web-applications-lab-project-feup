<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
  </h1>
  
  <h2 class="sub-header">
    Pending deliveries
  </h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
            Item
          </th>
		  <th>
            Comment
          </th>
          
          <th>
            Expire date
          </th>
		  <th>
            Delivery date
          </th>
          <th>
            Status
          </th>
		  <th>
            
          </th>
        </tr>
      </thead>
      <tbody>
	
        {foreach $requests as $userRequest}
		{if $userRequest.finaldate  <= $smarty.now}
		{if $userRequest.currentstatus != "closed"}
        <tr>
          <td>
            {$userRequest.idrequisition}
          </td>
          <td>
            {$userRequest.name}
          </td>
		  <td>
            {$userRequest.comment}
          </td>
          <td>
            {$userRequest.finaldate}
          </td>
		  <td>
            {$userRequest.deliverydate}
          </td>
          <td>
            {$userRequest.currentstatus}
          </td>
		   <td>
            <button class="btn btn-warning">Create Alert</button>
          </td>
        </tr>
		{/if}{/if}
        {/foreach}
      </tbody>
    </table>
  </div>
  
  <br>
  <h2 class="sub-header">
    Alerts
  </h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>
           Created On
          </th>
          <th>
            Item
          </th>
          <th>
            Reserve date
          </th>
          <th>
            Expire date
          </th>
          <th>
            Status
          </th>
        </tr>
      </thead>
      <tbody>
        {foreach $alerts as $alert}
        <tr>
          <td>
            {$alert.createdon}
          </td>
          <td>
            {$alert.name}
          </td>
          <td>
            {$alert.content}
          </td>
          <td>
            {$userReserve.username}
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
  <!--
  <div class="modal fade" id="requestItemModal" tabindex="-1" role="dialog" aria-labelledby="requestItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="deliverItemModalLabel">
              Request Item
            </h3>
          </div>
          <form action="../actions/reserve_request.php" method="post">
			<input type="hidden" id="reserveidinput" name="reserveid" value="0">
			<input type="hidden" id="itemidinput" name="itemid" value="0">
			<input type="hidden" id="readeridinput" name="readerid" value="{$readerid}">
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
  -->
</div>