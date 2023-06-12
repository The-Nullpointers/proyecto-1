<script src="../js/avatar.js"></script>

<?php

    session_start();
    require_once "connect.php";

    $avatarID = $_POST['AvatarID'];
    $ID_color = null;
    $ID_head = null;
    $ID_torso = null;
    $ID_accessory = null;

    $color = $_POST['colorSelected'];
    $head = $_POST['hairSelected'];
    $torso = $_POST['clothesSelected'];
    $accessory = $_POST['accessorySelected'];

    $color = str_replace(" ", "-", $color);
    $head = str_replace(" ", "-", $head);
    $torso = str_replace(" ", "-", $torso);
    $accessory = str_replace(" ", "-", $accessory);

    $color .= ".png";
    $head .= ".png";
    $torso .= ".png";
    $accessory .= ".png";

    //FETCH COLOR ID
    $query = "SELECT ID_COLOR FROM AVATARCREATOR_DBA.COLORS WHERE COLOR_NAME = '$color'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_color = $row['ID_COLOR'];
    }

    //FETCH TORSO ID
    $query = "SELECT ID_TORSO FROM AVATARCREATOR_DBA.TORSOS WHERE TORSO_NAME = '$torso'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_torso = $row['ID_TORSO'];
    }

    //FETCH HEAD ID
    $query = "SELECT ID_HEAD FROM AVATARCREATOR_DBA.HEADS WHERE HEAD_NAME = '$head'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_head = $row['ID_HEAD'];
    }

    //FETCH ACCESSORY ID
    $query = "SELECT ID_ACCESSORY FROM AVATARCREATOR_DBA.ACCESSORIES WHERE ACCESSORY_NAME = '$accessory'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
        $ID_accessory = $row['ID_ACCESSORY'];
    }

    $query = "BEGIN AVATARCREATOR_DBA.UPDATE_AVATAR($avatarID, $ID_color, $ID_head, $ID_torso, $ID_accessory); END;";
    $stid = oci_parse($conn, $query);
    $success = oci_execute($stid);

?>