<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <title>TNP AC - Login</title>
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <header>
        <div class="title-with-image">
            <img src="../images/logo.png" alt="NullPointer's logo">
            <h1>The NullPointer's Avatar Creator</h1>
        </div>
    </header>
    <main>

        <div class="div-form-login">
            <form action="index.php" method="post">

            
                <br>
                <input type="text" id="username" name="username" placeholder="Ingrese su Usuario" required>
                
                <input type="password" id="password" name="password" placeholder="Ingrese su Contraseña" required>
                
                <button type="submit" value="login" name="submit">Inicie Sesión</button>
                <p id=login_error></p>

                <br>
                <br>
            </form>
        </div>


        <div class="div-form-login">
            <form action="index.php" method="post">
                <input type="text" id="username" name="username" placeholder="Ingrese su Usuario" required>
                
                <input type="password" id="password" name="password" placeholder="Ingrese su Contraseña" required>   

                <input type="password" id="password" name="confirm_password" placeholder="Confirme su Contraseña" required>
                
                <button type="submit" value="signup" name="submit">Registrese</button>
                <p id=signup_error></p>

                
                <br>
                <br>
                <br>
                <br>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 The NullPointer's Avatar Creator.</p>
    </footer>

    <?php
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit'])){

            require_once "processes/connect.php";
            

            if($_POST['submit'] == 'login'){
                require_once "processes/login.php";
            }
            else if($_POST['submit'] == 'signup'){
                if(isset($_POST['confirm_password'])){  require "processes/signup.php"; }
            }
            

            
        }
    ?>


    <script src="../js/index.js"></script>

</body>
</html>
