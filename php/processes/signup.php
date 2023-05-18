<script src="../js/index.js"></script>

<?php

    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $confirm_password = ($_POST['confirm_password']);

    $pattern = '/^(?=.*[a-zA-Z].*[a-zA-Z].*[a-zA-Z].*[a-zA-Z])[a-zA-Z\d]*$/';

    //ADD TO ALLOW ONLY USERNAMES CONTAINING AT LEAST 4 LETTERS

    if(!preg_match($pattern, $username)){
        $error = "(!) El usuario debe tener al menos 4 letras y no caracteres especiales";
        echo "<script>signup_error('" . $error . "');</script>";
        exit();
    }

    if(!($password === $confirm_password)){
        $error = "(!) Las contraseñas no coinciden";
        echo "<script>signup_error('" . $error . "');</script>";
        exit();
    }

    if(strlen($password) < 8 ){
        $error = "(!) La contraseña debe ser de al menos 8 caracteres";
        echo "<script>signup_error('" . $error . "');</script>";
        exit();
    }

    $query = "SELECT * FROM AVATARCREATOR.USERS WHERE USERNAME = '$username'";

    $user_conn = $conn->query($query);

    if($user_conn->num_rows>=1){

        $error = "(!) Este usuario ya existe";

        echo "<script>signup_error('" . $error . "');</script>";
        

    }else{
        $query = "INSERT AVATARCREATOR.USERS VALUES ('$username', MD5('$password'), 0)";

        if($user_conn = $conn->query($query) === true){
            require_once "login.php";
        }
        else{
            $error = "(!) Ha ocurrido un error inesperado";
            echo "<script>signup_error('" . $error . "');</script>";
        }
        
    }

?>