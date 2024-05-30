<?php 
define("BASE_URL","Mi-pagina-web/views/");
require_once("../config/conexion.php");
if(isset($_SESSION["idusuarios"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("modulos/head.php");?>
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel= "stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">
    <?php include("modulos/header.php");?>
    <?php include("modulos/menu.php");?>
    <div class="content-wrapper">
    <div class="card card-solid">
        
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Estudiante
                        </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Angi Viviana Gonzalez</b></h2>
                                        <h4 class="lead"><b>angi.gonzalez@uniminuto.edu</b></h4>
                                        <p class="text-muted text-sm"><b>Acerca de: </b> Estudiante de ingenieria de Sistema de IV semestre </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Vive: Girardot-Cundinamarca</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Celular #: 3112401631</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="../imagenes/foto.jpg" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("modulos/footer.php");?>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<?php include("modulos/js.php");?>
<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>

<?php 
}else{
    header("Location:".Conectar::ruta()."views/404.php");
}
?>