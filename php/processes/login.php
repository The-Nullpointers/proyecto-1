<script src="../js/index.js"></script>

<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $passcaps = strtoupper(md5($password));

    $query = "SELECT * FROM AVATARCREATOR_DBA.USERS WHERE USERNAME = '$username' AND PASSWORD = '$passcaps'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($row = oci_fetch_array($stid, OCI_ASSOC)) {

        session_start();
        $_SESSION['username'] = $row['USERNAME'];
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['avatars'] = $row['AVATARS'];

        $query = "SELECT ID_AVATAR FROM AVATARCREATOR_DBA.AVATARS WHERE USERNAME = '$username' AND ROWNUM <= 3";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
        
        // Fetch the primary keys into an array
        $pkList = [];
        while (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
            $pkList[] = $row['ID_AVATAR'];
        }
        
        // Store each primary key in separate session variables
        $_SESSION['AVATAR_1'] = isset($pkList[0]) ? $pkList[0] : null;
        $_SESSION['AVATAR_2'] = isset($pkList[1]) ? $pkList[1] : null;
        $_SESSION['AVATAR_3'] = isset($pkList[2]) ? $pkList[2] : null;

        header("Location: dashboard.php");
    } else {
        echo "<script>login_error();</script>";
    }

?>