<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TNP AC - Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>

<body>

<header>
  <div class="title-with-image">
    <img src="../images/logo.png" alt="NullPointer's logo">
    <h1>The NullPointer's Avatar Creator</h1>
  </div>
</header>

<main>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="div-form-login">
          <form action="index.php" method="post">
            <input type="text" id="username" name="username" placeholder="Ingrese su Usuario" required>
            <input type="password" id="password" name="password" placeholder="Ingrese su Contraseña" required>
            <button type="submit" value="login" name="submit" class="btn button-29">Inicie Sesión</button>
            <p id="login_error"></p>
          </form>
        </div>
      </div>

      <div class="col">
        <div class="div-form-login">
          <form action="index.php" method="post">
            <input type="text" id="username" name="username" placeholder="Ingrese su Usuario" required>
            <input type="password" id="password" name="password" placeholder="Ingrese su Contraseña" required>
            <input type="password" id="password" name="confirm_password" placeholder="Confirme su Contraseña" required>
            <button type="submit" value="signup" name="submit" class="btn button-29">Registrese</button>
            <p id="signup_error"></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>
  <p>&copy; 2023 The NullPointer's Avatar Creator.</p>
</footer>

<?php
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit'])) {
  require_once "processes/connect.php";

  if ($_POST['submit'] == 'login') {
    require_once "processes/login.php";
  } else if ($_POST['submit'] == 'signup') {
    if (isset($_POST['confirm_password'])) {
      require_once "processes/signup.php";
    }
  }
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../js/index.js"></script>

</body>
</html>
