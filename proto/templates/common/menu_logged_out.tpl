<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">
              Toggle navigation
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </button>
          <a class="navbar-brand" href="main.php">
            <img href="" src="../resources/logo.png" style="width:6%;hight:6%">
            Gestorax - Inventory Management
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" method="post" action="../actions/login.php">
            <div class="form-group">
              <input name="email" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input name="password" type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">
              Sign in
            </button>
            <a type="submit" class="btn btn-primary" href="../pages/signup.php">
              Sign up
            </a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>