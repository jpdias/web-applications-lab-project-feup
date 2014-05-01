{foreach $users as $user}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="well well-sm">
          <div class="media">
            <a class="thumbnail pull-left" style="margin-bottom:0px;" href="#">
              <img class="media-object"   src="http://www.gravatar.com/avatar/a13ac7aed64918b6354f48da59490e3a?s=80">
            </a>
            <div class="media-body">
              <h4 class="media-heading">
                {$user.firstname} {$user.lastname}
              </h4>
              
			  <h5>
				<label>
				  E-mail: 
				  <label>
					<span class="label label-info">
					  {$user.email}
					</span>
				  </h5>
                  
                  <h5>
                    <label>
                      Address: 
                      <label>
                        {$user.address}
                      </span>
                    </h5>
                    
                    <h5>
                      <label>
                        Birthdate: 
                        <label>
						  {$user.birthdate}
                        </span>
                      </h5>
                      
                      <h5>
                        <label>
                          Status: 
                          <label>
							{if $user.currentstatus == 'active'}
								<span class="label label-success">
							{else}
								<span class="label label-danger">
							{/if}
                              {$user.currentstatus}
                            </span>
                          </h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <h3>
                  Account status: 
				  {if $user.currentstatus == 'active'}
                  <button class="btn btn-danger" data-toggle="modal" data-target="#disableUserAccountModal">
                    Disable Account
                  </button>
				  {else}
				  <button class="btn btn-success" data-toggle="modal" data-target="#enableUserAccountModal">
                    Enable Account
                  </button>
				  {/if}
                </h3>
              </div>
              <div class="col-md-5">
                <h3>
                  Permissions: 
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select one: <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a data-toggle="modal" data-target="#readerPermissionsModal">Reader</a></li>
							<li><a data-toggle="modal" data-target="#managerPermissionsModal">Manager</a></li>
						</ul>
					</div>
                </h3>
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="col-md-10">
                <h2 class="sub-header">
                  Requests
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
                      {foreach $usersRequests as $usersRequest}
                      <tr>
                        <td>
                          {$usersRequest.idrequisition}
                        </td>
                        <td>
                          {$usersRequest.name}
                        </td>
                        <td>
                          {$usersRequest.comment}
                        </td>
                        <td>
                          {$usersRequest.initialdate}
                        </td>
                        <td>
                          {$usersRequest.finaldate}
                        </td>
                        <td>
                          {$usersRequest.deliverydate}
                        </td>
                        <td>
                          {$usersRequest.currentstatus}
                        </td>
                      </tr>
                      {/foreach}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade" id="disableUserAccountModal" tabindex="-1" role="dialog" aria-labelledby="disableUserAccountModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="disableUserAccountModalLabel">
              Disable account
            </h4>
          </div>
          <form action="../actions/user_disable.php" method="post">
            <input type="hidden" name="readerid" value="{$user.idreader}">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to disable this account?
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
	
	<div class="modal fade" id="enableUserAccountModal" tabindex="-1" role="dialog" aria-labelledby="enableUserAccountModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="enableUserAccountModalLabel">
              Disable account
            </h4>
          </div>
          <form action="../actions/user_enable.php" method="post">
            <input type="hidden" name="readerid" value="{$user.idreader}">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to enable this account?
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
	
	<div class="modal fade" id="readerPermissionsModal" tabindex="-1" role="dialog" aria-labelledby="readerPermissionsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="readerPermissionsModalLabel">
              Disable account
            </h4>
          </div>
          <form action="../actions/user_permissions.php" method="post">
            <input type="hidden" name="readerid" value="{$user.idreader}">
			<input type="hidden" name="permissions" value="reader">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to change this account permissions to reader?
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
            <h4 class="modal-title" id="managerPermissionsModalLabel">
              Disable account
            </h4>
          </div>
          <form action="../actions/user_permissions.php" method="post">
            <input type="hidden" name="readerid" value="{$user.idreader}">
			<input type="hidden" name="permissions" value="manager">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to change this account permissions to manager?
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
{/foreach}