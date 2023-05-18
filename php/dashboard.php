<?php
//PAUSED FOR DEVELOPMENT
	/*session_start();
	if(!$_SESSION['isLoggedIn']){
		header("Location: index.php");
	}*/
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="dashboard.js"></script>
</head>
<body>
  <header>
    <h1>Dashboard</h1>

    <div class="user-dropdown">
      <img src="avatar.jpg" alt="User Avatar" class="avatar-img">
      <div class="dropdown-content">
        <a href="#">Manage Account</a>
        <a href="#">Logout</a>
      </div>
  </div>


  </header>

  <main>
    <h2>Avatars</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="avatar1.jpg" alt="Avatar 1" class="card-img-top">
            <div class="card-body">
              <button onclick="deleteCard(1)" class="btn btn-danger">Delete</button>
              <button onclick="editCard(1)" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="avatar2.jpg" alt="Avatar 2" class="card-img-top">
            <div class="card-body">
              <button onclick="deleteCard(2)" class="btn btn-danger">Delete</button>
              <button onclick="editCard(2)" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="avatar3.jpg" alt="Avatar 3" class="card-img-top">
            <div class="card-body">
              <button onclick="deleteCard(3)" class="btn btn-danger">Delete</button>
              <button onclick="editCard(3)" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 The NullPointer's Avatar Creator.</p>
  </footer>
</body>
</html>
