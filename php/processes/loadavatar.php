<script src="../js/avatar.js"></script>

<?php

    $nAvatar = $_GET['avatar'];
    $ID_color = null;
    $ID_head = null;
    $ID_torso = null;
    $ID_accessory = null;
    $color = "";
    $head = "";
    $torso = "";
    $accessory = "";

    $sessionVariableName = 'AVATAR_' . $nAvatar;
    $avatarID = $_SESSION[$sessionVariableName];

    echo "<script>setAvatarID($avatarID);</script>";

    //FETCH COLOR ID
    $query = "SELECT ID_COLOR FROM AVATARCREATOR_DBA.AVATARS WHERE ID_AVATAR = $avatarID";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_color = $row['ID_COLOR'];
    }

    //FETCH HEAD ID
    $query = "SELECT ID_HEAD FROM AVATARCREATOR_DBA.AVATARS WHERE ID_AVATAR = $avatarID";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_head = $row['ID_HEAD'];
    }

    //FETCH TORSO ID
    $query = "SELECT ID_TORSO FROM AVATARCREATOR_DBA.AVATARS WHERE ID_AVATAR = $avatarID";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_torso = $row['ID_TORSO'];
    }

    //FETCH ACCESSORY ID
    $query = "SELECT ID_ACCESSORY FROM AVATARCREATOR_DBA.AVATARS WHERE ID_AVATAR = $avatarID";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_accessory = $row['ID_ACCESSORY'];
    }

    //GETS COLOR NAME
    $query = "SELECT COLOR_NAME FROM AVATARCREATOR_DBA.COLORS WHERE ID_COLOR = $ID_color";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $color = $row['COLOR_NAME'];
    }

    //GETS HEAD NAME
    $query = "SELECT HEAD_NAME FROM AVATARCREATOR_DBA.HEADS WHERE ID_HEAD = $ID_head";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $head = $row['HEAD_NAME'];
    }

    //GETS TORSO NAME
    $query = "SELECT TORSO_NAME FROM AVATARCREATOR_DBA.TORSOS WHERE ID_TORSO = $ID_torso";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $torso = $row['TORSO_NAME'];
    }

    //GETS ACCESSORY NAME
    $query = "SELECT ACCESSORY_NAME FROM AVATARCREATOR_DBA.ACCESSORIES WHERE ID_ACCESSORY = $ID_accessory";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $accessory = $row['ACCESSORY_NAME'];
    }

    echo "<script>loadAvatar('$color', '$torso', '$head', '$accessory');</script>";
?>