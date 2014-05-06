<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
  </h1>
  
  <h2 class="sub-header">
    My latest requests
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
</div>