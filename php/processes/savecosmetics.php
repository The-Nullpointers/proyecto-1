<?php

    session_start();
    require_once "connect.php";

    //COLORS
    $folderPath = '../images/penguins/';

    $files = scandir($folderPath);

    $insertProcedure = 'BEGIN AVATARCREATOR_DBA.INSERT_INTO_COLORS(:name); END;';
    $stid = oci_parse($conn, $insertProcedure);

    foreach ($files as $file) {
        
        if ($file != '.' && $file != '..') {
            
            $checkQuery = "SELECT COUNT(*) FROM AVATARCREATOR_DBA.COLORS WHERE COLOR_NAME = '$file'";
            $checkStid = oci_parse($conn, $checkQuery);
            oci_execute($checkStid);
            $row = oci_fetch_assoc($checkStid);

            if ($row['COUNT(*)'] == 0) {
                $fileName = $file;
                oci_bind_by_name($stid, ':name', $fileName);
                oci_execute($stid);
            }
        }
    }

    //HAIR
    $folderPath = '../images/hair/';

    $files = scandir($folderPath);

    $insertProcedure = 'BEGIN AVATARCREATOR_DBA.INSERT_INTO_HEADS(:name); END;';
    $stid = oci_parse($conn, $insertProcedure);

    foreach ($files as $file) {
        
        if ($file != '.' && $file != '..') {
            
            $checkQuery = "SELECT COUNT(*) FROM AVATARCREATOR_DBA.HEADS WHERE HEAD_NAME = '$file'";
            $checkStid = oci_parse($conn, $checkQuery);
            oci_execute($checkStid);
            $row = oci_fetch_assoc($checkStid);

            if ($row['COUNT(*)'] == 0) {
                $fileName = $file;
                oci_bind_by_name($stid, ':name', $fileName);
                oci_execute($stid);
            }
        }
    }

    //TORSOS
    $folderPath = '../images/clothes/';

    $files = scandir($folderPath);

    $insertProcedure = 'BEGIN AVATARCREATOR_DBA.INSERT_INTO_TORSOS(:name); END;';
    $stid = oci_parse($conn, $insertProcedure);

    foreach ($files as $file) {
        
        if ($file != '.' && $file != '..') {
            
            $checkQuery = "SELECT COUNT(*) FROM AVATARCREATOR_DBA.TORSOS WHERE TORSO_NAME = '$file'";
            $checkStid = oci_parse($conn, $checkQuery);
            oci_execute($checkStid);
            $row = oci_fetch_assoc($checkStid);

            if ($row['COUNT(*)'] == 0) {
                $fileName = $file;
                oci_bind_by_name($stid, ':name', $fileName);
                oci_execute($stid);
            }
        }
    }

    //ACCESSORIES
    $folderPath = '../images/accessories/';

    $files = scandir($folderPath);

    $insertProcedure = 'BEGIN AVATARCREATOR_DBA.INSERT_INTO_ACCESSORIES(:name); END;';
    $stid = oci_parse($conn, $insertProcedure);

    foreach ($files as $file) {
        
        if ($file != '.' && $file != '..') {
            
            $checkQuery = "SELECT COUNT(*) FROM AVATARCREATOR_DBA.ACCESSORIES WHERE ACCESSORY_NAME = '$file'";
            $checkStid = oci_parse($conn, $checkQuery);
            oci_execute($checkStid);
            $row = oci_fetch_assoc($checkStid);

            if ($row['COUNT(*)'] == 0) {
                $fileName = $file;
                oci_bind_by_name($stid, ':name', $fileName);
                oci_execute($stid);
            }
        }
    }
?>
