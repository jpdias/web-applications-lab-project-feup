<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">
    Requests
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
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
            User
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
        {foreach $requests as $request}
        <tr>
          <td>
            {$request.idrequisition}
          </td>
		  <td>
            {$request.name}
          </td>
          <td>
            {$request.username}
          </td>
		  <td>
            {$request.comment}
          </td>
          <td>
            {$request.initialdate}
          </td>
          <td>
            {$request.finaldate}
          </td>
		  <td>
		  {if $request.deliverydate == ''}
		  <button class="btn btn-success" data-toggle="modal" data-target="#deliverItemModal" onclick="document.getElementById('requestidinput').value = {$request.idrequisition};document.getElementById('itemidinput').value = {$request.iditem}">
			Deliver Item
          </button>
		  {else}
            {$request.deliverydate}
		  {/if}
          </td>
          <td>
            {$request.currentstatus}
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
  
  <br>
  <h2 class="sub-header">
    Reservations
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
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
            User
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
        {foreach $reserves as $reserve}
        <tr>
          <td>
            {$reserve.idreserve}
          </td>
          <td>
            {$reserve.name}
          </td>
		  <td>
            {$request.username}
          </td>
		  <td>
            {$reserve.reservedate}
          </td>
          <td>
            {$reserve.expiredate}
          </td>
          <td>
            {$reserve.currentstatus}
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
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