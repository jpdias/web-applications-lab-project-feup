<div class="container">
  <div class="col-md-12">
    <br>
	<br>
	<br>
	<h3>Administrator Page</h3>
	<br>
	<br>
	
	<form class="form-signin" role="form" method="post" action="../actions/admin_change_password.php">
	<div class="input-group">
	  <span class="input-group-addon">
	    Password
	  </span>
	  <input type="password" class="form-control" name="password" placeholder="New Password">
    </div>
	<br>
	<input type="submit" value="Change Password">
	</form>
    <br>
	<br>
	
	<div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Reader #
            </th>
            <th>
              Name
            </th>
			<th>
              E-mail
            </th>
			<th>
              Permissions
            </th>
          </tr>
        </thead>
        <tbody>
          {foreach $activeusers as $activeuser}
          <tr>
            <td>
              {$activeuser.idreader}
            </td>
            <td>
              {$activeuser.firstname} {$activeuser.lastname}
            </td>
			<td>
              {$activeuser.email}
            </td>
            <td>
              <div class="btn-group">
				<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select one: <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<button class="btn btn-success" data-toggle="modal" data-target="#readerPermissionsModal" onclick="document.getElementById('readeridinput').value = {$activeuser.idreader}">Reader
					<button class="btn btn-success" data-toggle="modal" data-target="#managerPermissionsModal" onclick="document.getElementById('readeridinput1').value = {$activeuser.idreader}">Manager
				</ul>
			  </div>
            </td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  
  <div class="modal fade" id="readerPermissionsModal" tabindex="-1" role="dialog" aria-labelledby="readerPermissionsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="readerPermissionsModalLabel">
              Account's permissions
            </h3>
          </div>
          <form action="../actions/admin_user_permissions.php" method="post">
            <input type="hidden" id="readeridinput" name="readeridinput" value="0">
			<input type="hidden" id="permissions" name="permissions" value="reader">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to change this account's permissions to reader?
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
	
	<div class="modal fade" id="managerPermissionsModal" tabindex="-1" role="dialog" aria-labelledby="managerPermissionsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="managerPermissionsModalLabel">
              Account's permissions
            </h3>
          </div>
          <form action="../actions/admin_user_permissions.php" method="post">
            <input type="hidden" id="readeridinput1" name="readeridinput1" value="0">
			<input type="hidden" id="permissions" name="permissions" value="manager">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to change this account's permissions to manager?
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