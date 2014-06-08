<!-- Model for in-line help -->
<div class="modal fade" id="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title"><i>DashBoard Overview</i></h4>
      </div>
      <div class="modal-body">
        <div class="te">
          <p>
            After a manager has its sign in complete he will have access to its <i>DashBoard</i>.
          </p>
          <p>
            In this first part of the <i>DashBoard</i> you can observe the overview of all the <i>Requests</i> and <i>Reserves</i> made by yourself so far, displaying several details on the item itself including the current status of the <i>Request</i> or <i>Reserve</i>.
          </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
    <a class="" data-toggle="modal" href="formal.html" data-target="#modal">
      <i class="glyphicon glyphicon-question-sign"></i>
    </a>
  </h1>
  
  <h2 class="sub-header">
    My requests
  </h2>
  <div class="table-responsive" style="max-height:50%;overflow:auto">
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
            Request date
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
        </tr>
      </thead>
      <tbody>
        {foreach $userRequests as $userRequest}
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
            {$userRequest.initialdate}
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
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
  
  <br>
  <h2 class="sub-header">
    My reserves
  </h2>
  <div class="table-responsive" style="max-height:50%;overflow:auto"> 
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
            Reserve date
          </th>
          <th>
            Expire date
          </th>
          <th>
            Status
          </th>
		  <th>
            
          </th>
        </tr>
      </thead>
      <tbody>
        {foreach $userReserves as $userReserve}
        <tr>
          <td>
            {$userReserve.idreserve}
          </td>
          <td>
            {$userReserve.name}
          </td>
          <td>
            {$userReserve.reservedate}
          </td>
          <td>
		  {if $userReserve.currentstatus == 'open' && $userReserve.itemcurrentstatus == 'reserved'}
		  <button class="btn btn-success" data-toggle="modal" data-target="#requestItemModal" onclick="document.getElementById('reserveidinput').value = {$userReserve.idreserve};document.getElementById('itemidinput').value = {$userReserve.iditem}">
			Request Item
          </button>
		  {else}
            {$userReserve.expiredate}
		  {/if}
          </td>
          <td>
            {$userReserve.currentstatus}
          </td>
		  <td>
		    {if $userReserve.currentstatus == 'open'}
		    <button class="btn btn-danger" data-toggle="modal" data-target="#cancelReserveModal" onclick="document.getElementById('cancelreserveidinput').value = {$userReserve.idreserve};document.getElementById('cancelitemidinput').value = {$userReserve.iditem}">
		        Cancel Reserve
		    </button>
		    {/if}
		  </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
  
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
	
	<div class="modal fade" id="cancelReserveModal" tabindex="-1" role="dialog" aria-labelledby="cancelReserveModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="cancelReserveModalLabel">
              Cancel Reserve
            </h3>
          </div>
          <form action="../actions/reserve_cancel.php" method="post">
			<input type="hidden" id="cancelreserveidinput" name="reserveid" value="0">
			<input type="hidden" id="cancelitemidinput" name="itemid" value="0">
			<input type="hidden" id="readeridinput" name="readerid" value="{$readerid}">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to cancel this reserve?
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