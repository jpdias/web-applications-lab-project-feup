<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">
    Alerts
  </h2>
  <div class="table-responsive" style="height:800px;overflow:auto">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>
           Created On
          </th>
          <th>
            Name
          </th>
          <th>
            Content
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
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>