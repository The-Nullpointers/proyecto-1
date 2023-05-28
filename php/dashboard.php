<?php
	session_start();
	if(!$_SESSION['isLoggedIn']){
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../js/dashboard.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
  <header>
    <div class="title-with-image">
      <img src="../images/logo.png" alt="NullPointer's logo">
      <h1>The NullPointer's Avatar Creator</h1>
    </div>

    <div class="user-dropdown">
      <div class="dropdown-content">
        <a href="processes/logout.php" id="logout-tag">Cerrar Sesion</a>
      </div>
    </div>
  </header>

  <main>

    <?php

      $username = $_SESSION['username'];
      $avatars = $_SESSION['avatars'];

      echo "<h2 id='AvatarCounter'>Avatares de $username</h2>";
      echo "<br>";
      echo '<script>SetNumAvatares(3);</script>';
    ?>
    <div class="container">
      
      <div class="row" id="card-container">





      

      </div>
      <br>
      <br>
        
     
    </div>
  </main>

  <footer>
    <p>&copy; 2023 The NullPointer's Avatar Creator.</p>
  </footer>

  <?php
    echo '<script>LoadAvatarCards();</script>';
    require_once "processes/loadavatardashboard.php"
  ?>


</body>
</html>
