<?php

    session_start();
    require_once "connect.php";
    $username = $_SESSION['username'];
    $avatars = $_POST['nAvatares'];

    $query = "BEGIN AVATARCREATOR_DBA.UPDATE_USERS_AVATARS('$username', $avatars); END;";
    $stid = oci_parse($conn, $query);
    $result = oci_execute($stid);

    if($result === true){
        $_SESSION['avatars'] = $avatars;
    }
    else{
        echo "console.log('BEGIN AVATARCREATOR_DBA.UPDATE_USERS_AVATARS('$username', $avatars); END;');";
    }


?>