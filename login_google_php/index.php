<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>WELCOME</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
      <nav class="navbar navbar-light bg-faded">
        <a class="navbar-brand" href="#">WELCOME <?php echo $_SESSION['name']; ?></a>
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        <form class="form-inline navbar-form pull-right">
          <input class="form-control" type="text" placeholder="Search">
          <button class="btn btn-success-outline" type="submit">Search</button>
        </form>
      </nav>
      <div class="row">
      	<div class="col-md-4">
      		<img src="<?php echo $_SESSION['picture']; ?>" style="width: 300px;">
      	</div>
      	<div class="col-md-8">
      		<table class="table table-hover">
      			<thead>
      				<tr>
      					<th>Id</th>
      					<th>Nama</th>
      					<th>Email</th>
      				</tr>
      			</thead>
      			<tbody>
      				<tr>
      					<td><?php echo $_SESSION['id'] ?></td>
      					<td><?php echo $_SESSION['name'] ?></td>
      					<td><?php echo $_SESSION['email'] ?></td>
      				</tr>
      			</tbody>
      		</table>
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
</html>