<!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="post" action="../actions/register.php">
    <h2 class="form-signin-heading">
      Sign up
    </h2>
    <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <input name="firstname" type="text" class="form-control" placeholder="First Name" required autofocus>
        </div>
        <!-- /input-group -->
      </div>
      <!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input name="lastname" type="text" class="form-control" placeholder="Last Name" required>
        </div>
        <!-- /input-group -->
      </div>
      <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
  </br>
  <input name="address" type="text" class="form-control" placeholder="Address" required>
  <br>
  <input name="birthdate" type="date" class="form-control" placeholder="Birthdate (YYYY-MM-DD)" {literal} pattern="\d{4}-\d{1,2}-\d{1,2}" {/literal} required>
  <br>
  <input name="email" type="email" class="form-control" placeholder="Email address" required>
  <br>
  <input name="password" type="password" class="form-control" placeholder="Password" required>
  <input name="confirmpassword" type="password" class="form-control" placeholder="Reenter password" required>
  <label class="checkbox">
    <input name="termsandconditions" type="checkbox" value="agree" checked>
    I agree with the terms and conditions.
  </label>
  <button class="btn btn-lg btn-primary btn-block" type="submit">
    Sign up
  </button>
</form>
</div>