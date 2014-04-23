<!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="post" action="../actions/login.php">
    <h2 class="form-signin-heading">
      Please sign in
    </h2>
    <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
    <input name="password" type="password" class="form-control" placeholder="Password" required>
    <label class="checkbox">
      <input type="checkbox" value="remember-me">
      Remember me
    </label>
    <button class="btn btn-lg btn-success btn-block" type="submit">
      Sign in
    </button>
  </form>
</div>