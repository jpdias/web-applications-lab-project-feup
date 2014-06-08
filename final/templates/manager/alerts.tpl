<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
  </h1>

  <h2 class="sub-header">
    Pending deliveries
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
    <table class="table table-striped" id="all" >
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
            Reader Username
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
		 
{if $userRequest.currentstatus != 'closed'}

        <tr>
		<td id="idIt" style="display:none" >{$userRequest.iditem}</td>
		<td id="idUs" style="display:none">{$userRequest.idreader}</td>
          <td id="idrequisition">
            {$userRequest.idrequisition}
          </td>
          <td id="name">
            {$userRequest.name}
          </td>
          <td id="comment">
            {$userRequest.comment}
          </td>
          <td id="finaldate">
            {$userRequest.finaldate}
          </td>
          <td id="deliverydate">
            {$userRequest.deliverydate}
          </td>
          <td id="username">
              {$userRequest.username}
              </td>
          <td id="currentstatus">
            {$userRequest.currentstatus}
          </td>
          <td>
            <button id="createbtn" class="btn btn-warning" data-toggle="modal" data-target="#alert" ">Create Alert </button>
          </td>
        </tr>
	{/if}
        {/foreach}
      </tbody>
    </table>
  </div>

  <br>
  <h2 class="sub-header">
    Alerts
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
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
            Message
          </th>
          <th>
            Username
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
            {$alert.username}
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>

  <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="requestItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="deliverItemModalLabel">
                Creating a new alert
            </h3>
          </div>
          <form action="../actions/create_alert.php" method="post">
			<input type="hidden" id="idreq" name="idreq" value="0">
			<input type="hidden" id="varname" name="varname" value="0">
			<input type="hidden" id="varcom" name="varcom" value="0">
			<input type="hidden" id="vardelivery" name="vardelivery" value="0">
			<input type="hidden" id="varfin" name="varfin" value="0">
			<input type="hidden" id="varuser" name="varuser" value="0">
			<input type="hidden" id="varcurr" name="varcurr" value="0">
<input type="hidden" id="varIt" name="varIt" value="0">
<input type="hidden" id="varUs" name="varUs" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                <div class="col-md-12">
                  <div class="input-group">
                  </div>
                  <br>
                </div>
				<div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Message
                    </span>
                    <input type="text" class="form-control" name="comment" placeholder="Comment">
                  </div>
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Cancel
              </button>
              <button type="submit" class="btn btn-success">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>
<script>
/*function fillVars(){
$("#varIt").val( $("#createbtn").parent('td').parent('tr').find('#idIt').text());
$("#varUs").val($("#createbtn").parent('td').parent('tr').find('#idUs').text());
console.log( $("#createbtn").parent('td').parent('tr').find('#idIt').text());
console.log( $("#createbtn").parent('td').parent('tr').find('#idUs').text());
};*/
$('#all').on( 'click', '#createbtn', function( event ) {
        var $tr = $(this).closest('tr');
        $("#varIt").val($tr.find('#idIt').text());
        $("#varUs").val($tr.find( '#idUs').text());
console.log( $tr.find('#idIt').text());
        // Submit your form here
});

</script>