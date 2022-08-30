<?php
   
    require_once('../Controller/controladorProductos.php');
    $listarProductos = $controladorProductos->listarProductos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cafeteria</title>
    <!-- Custom fonts for this template-->
    <link href="../Layout/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../Layout/css/fons.googleapis.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../Layout/css/sb-admin-2.min.css" rel="stylesheet">
    <?php include('../Layout/plantilla/select2Css.html') ?>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('../Layout/plantilla/sidebar.php') ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h1>Crear producto</h1>
                                <a href="../Controller/controladorProductos.php?listarProductos" style="height: 50%;" class="btn btn-dark">Regresar</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="error"></div>
                            <form action="../Controller/controladorProductos.php" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                    
                                        <div class="form-group">
                                            <label for="referencia">referencia:</label>
                                            <input required id="referencia" name="referencia" class="form-control" type="text" placeholder="referencia...">
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group">
                                            <label for="precio">precio:</label>
                                            <input required id="precio" name="precio" class="form-control" type="text" placeholder="precio...">
                                        </div> 
                                         
                                        <div class="form-group">
                                            <label for="peso">peso:</label>
                                            <input required id="peso" name="peso" class="form-control" type="text" placeholder="peso...">
                                        </div> 
                                        <div class="form-group">
                                            <label for="categoria">categoria:</label>
                                            <input required id="categoria" name="categoria" class="form-control" type="text" placeholder="categoria...">
                                        </div> 
                                        <div class="form-group">
                                            <label for="stock">stock:</label>
                                            <input required id="stock" name="stock" class="form-control" type="text" placeholder="stock...">
                                        </div>
                                        <div class="form-group">
                                            <label for="fecha_creacion">fecha creacion:</label>
                                            <input required id="fecha_creacion" name="fecha_creacion" class="form-control" type="text" placeholder="fecha_creacion...">
                                        </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="registrarProducto" type="submit" class="btn btn-dark col-md-12" value="Registrar">
                                        <hr>
                                        <a href="../Controller/controladorProductos.php?listarProductos" class="btn btn-secondary col-md-12">Cancelar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include('../Layout/plantilla/footer.php'); ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="../Layout/vendor/jquery/jquery.min.js"></script>
    <script src="../Layout/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../Layout/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../Layout/js/sb-admin-2.min.js"></script>

    <?php include('../Layout/plantilla/select2Js.html') ?>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            $error = implode(' ', explode('-', $error));
            ?> 
            <script>
                document.getElementById('error').innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                `;
            </script>
            <?php
        }
    ?>
</body>
</html>