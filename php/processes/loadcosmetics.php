<script src="../js/avatar.js"></script>

<?php

    require_once "connect.php";


    //HAIR
    $query = 'SELECT HEAD_NAME FROM AVATARCREATOR_DBA.HEADS';
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    $names = [];
    while ($row = oci_fetch_assoc($stid)) {
        $names[] = $row['HEAD_NAME'];
    }

    foreach ($names as $name) {
        echo "<script>LoadHair('$name');</script>";
    }


    //COLORS
    $query = 'SELECT COLOR_NAME FROM AVATARCREATOR_DBA.COLORS';
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    $names = [];
    while ($row = oci_fetch_assoc($stid)) {
        $names[] = $row['COLOR_NAME'];
    }

    foreach ($names as $name) {
        echo "<script>LoadColors('$name');</script>";
    }


    //TORSOS
    $query = 'SELECT TORSO_NAME FROM AVATARCREATOR_DBA.TORSOS';
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    $names = [];
    while ($row = oci_fetch_assoc($stid)) {
        $names[] = $row['TORSO_NAME'];
    }

    foreach ($names as $name) {
        echo "<script>LoadClothes('$name');</script>";
    }


    //ACCESSORIES
    $query = 'SELECT ACCESSORY_NAME FROM AVATARCREATOR_DBA.ACCESSORIES';
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    $names = [];
    while ($row = oci_fetch_assoc($stid)) {
        $names[] = $row['ACCESSORY_NAME'];
    }

    foreach ($names as $name) {
        echo "<script>LoadAccessories('$name');</script>";
    }
?>