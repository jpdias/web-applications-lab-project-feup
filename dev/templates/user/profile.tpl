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
                            <span class="label label-success">
                              {$user.currentstatus}
                            </span>
                          </h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editUserModal">
                  Edit profile details
                </button>
                {if $user.currentstatus == 'active'}
                <br>
				<br>
				<button class="btn btn-danger" data-toggle="modal" data-target="#disableUserAccountModal">
                  Disable Account
                </button>
                {/if}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="editUserModalLabel">
              Edit profile details
            </h4>
          </div>
          <form action="../actions/user_edit.php" method="post">
            <input type="hidden" name="readerid" value="{$user.idreader}">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      First Name
                    </span>
                    <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{$user.firstname}">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Last Name
                    </span>
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{$user.lastname}">
                  </div>
                  <br>
                  
                </div>
                
                <br>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Address
                    </span>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="{$user.address}">
                  </div>
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Email
                    </span>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{$user.email}" readonly>
                  </div>
                  
                  <br>
                </div>
                
                <br>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Previous Password
                    </span>
                    <input type="password" class="form-control" name="previouspassword" placeholder="Password">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      New Password
                    </span>
                    <input type="password" class="form-control" name="newpassword" placeholder="Password">
                  </div>
                  
                  <br>
                </div>
                <br>
                <br>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-success">
                Save changes
              </button>
            </form>
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
          <form action="../actions/user_disable_logout.php" method="post">
            <input type="hidden" name="readerid" value="{$user.idreader}">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to disable your account?
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