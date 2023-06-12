<?php
	session_start();
	if(!$_SESSION['isLoggedIn']){
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <title>Personaliza tu avatar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/avatar.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
    <header>
        <div class="title-with-image">
            <img src="../images/logo.png" alt="NullPointer's logo">
            <h1>The NullPointer's Avatar Creator</h1>
        </div>
    </header>

    <br>
    <br>
    <br>
    
    <div class="container">

        <div class="row">
            <div class="col-md-6 contenedor-imagenes" id="penguin">
                <img src="../images/penguins/blanco.png" alt="Pinguino" id="skinImage">
                <img src="../images/vacia.png" alt="Torso" id="clothesImage">
                <img src="../images/vacia.png" alt="Cabeza" id="hairImage">
                <img src="../images/vacia.png" alt="Accesorio" id="accessoriesImage">
            </div>
            <div class="col-md-6 form-custom">
                <h2>Personalización</h2>
                <div class="form-group">
                    <label for="skinColor">Color:</label>
                    <select class="form-control" id="skinStyle" onchange="ChangeColor()">

                    </select>
                </div>
                <div class="form-group">
                    <label for="aspect">Vestimenta:</label>
                    <select class="form-control" id="clothesStyle" onchange="ChangeTorso()">

                    </select>
                </div>
                <div class="form-group">
                    <label for="hairStyle">Estilo de pelo:</label>
                    <select class="form-control" id="hairStyle" onchange="ChangeHair()">

                    </select>
                </div>
                <div class="form-group">
                    <label for="accessories">Accesorios:</label>
                    <select class="form-control" id="accessoriesStyle" onchange="ChangeAccessory()">

                    </select>
                </div>
                <br>
                <center>
                    <button class="btn button-29" id="randomAvatar" onclick="RandomAvatar()">Aleatorio</button>
                    <button class="btn button-29" id="saveAvatar" onclick="SaveAvatar()">Guardar & Salir</button>
                    <button class="btn button-28" id="downloadAvatar" onclick="DownloadAvatar()">Descargar</button>
                </center>
            </div>
        </div>
    </div>

    
    <br>
    <br>
    <br>
    
    <br>
    <br>
    <br>
    <footer>
        <p>&copy; 2023 The NullPointer's Avatar Creator.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php
        require_once "processes/loadcosmetics.php";
        require_once "processes/loadAvatar.php";
    ?>
</body>
</html>