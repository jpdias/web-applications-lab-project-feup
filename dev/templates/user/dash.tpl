<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
  </h1>
  
  <h2 class="sub-header">
    Latest requests
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
            Request date
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
        {foreach $results as $result}
        <tr>
          <td>
            {$result.idrequisition}
          </td>
          <td>
            {$result.name}
          </td>
          <td>
            {$result.initialdate}
          </td>
          <td>
            {$result.finaldate}
          </td>
          <td>
            {$result.currentstatus}
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>