<script src="../js/index.js"></script>

<?php

    $username = ($_POST['username']);
    $password = ($_POST['password']);

    $query = "SELECT * FROM AVATARCREATOR.USERS WHERE USERNAME = '$username' AND PASSWORD = MD5('$password')";

    $user_conn = $conn->query($query);

    if($user_conn->num_rows>=1){

        $row = $user_conn->fetch_array(MYSQLI_ASSOC);

        session_start();
        $_SESSION['username'] = $row['USUARIO'];
        $_SESSION['isLoggedIn'] = true;

        header("Location: dashboard.php");
        

    }else{
        echo "<script>login_error();</script>";
    }

?>