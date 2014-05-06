<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1>
    <i class="glyphicon glyphicon-search">
    </i>
    Search Users
  </h1>
  <div class="col-md-8">
    <form>
      <div class="input-group">
        <div class="input-group-btn">
          
          <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">
            Everything 
            <span class="caret">
            </span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">
                Name
              </a>
            </li>
            <li>
              <a href="#">
                Address
              </a>
            </li>
			<li>
              <a href="#">
                E-mail
              </a>
            </li>
          </ul>
        </div>
        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search">
            </i>
          </button>
        </div>
      </div>
    </form>
    <br>
  </div>
  <div class="col-md-4">
    <br>
  </div>
  <div class="col-md-6">
    <h2 class="sub-header">
      Active users
    </h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              #
            </th>
            <th>
              Name
            </th>
            <th>
              E-mail
            </th>
            <th>
              Info
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
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_user.php?id={$IDMANAGER}&readerid={$activeuser.idreader}'">
                <i class="glyphicon glyphicon-plus">
                </i>
              </button>
            </th>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-6">
    <h2 class="sub-header">
      New Users
    </h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              #
            </th>
            <th>
              Name
            </th>
            <th>
              E-mail
            </th>
            <th>
              Info
            </th>
          </tr>
        </thead>
        <tbody>
          {foreach $newusers as $newuser}
          <tr>
            <td>
              {$newuser.idreader}
            </td>
            <td>
              {$newuser.firstname} {$newuser.lastname}
            </td>
            <td>
              {$newuser.email}
            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_user.php?id={$IDMANAGER}&readerid={$newuser.idreader}'">
                <i class="glyphicon glyphicon-plus">
                </i>
              </button>
            </th>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>