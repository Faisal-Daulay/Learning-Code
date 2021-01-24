<?php 
  require_once "config.php";
  
  if (isset($_SESSION['access_token'])) {
    header('Location: index.php');
    exit();
  }

  $loginURL = $gClient->createAuthUrl();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LOGIN WITH GOOGLE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container" style="margin-top: 100px">
      <div class="row justify-content-center">
        <div class="col-md-6 col-offset-3" align="center">
          <form>
            <div class="form-group">
              <input type="text" name="user" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="pass" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-primary">
              <input type="button" onclick="window.location='<?php echo $loginURL ?>';" value="Log With Google" class="btn btn-danger">
            </div>
          </form>
        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>