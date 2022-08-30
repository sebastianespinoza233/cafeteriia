<?php
   
    require_once('../Controller/controladorProductos.php');
    $listaProductos = $controladorProductos->listarProductos();
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
    <!-- Datatables -->
    <link href="../Lib/css/datatables.min.css" rel="stylesheet">
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
                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h1>Lista de productos</h1>
                                <a href="../Controller/controladorProductos.php?registrarProducto" style="height: 50%;" class="btn btn-dark">Nuevo producto</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="listarRegistros" style="width:100%" class="table table-hover display">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>referencia</th>
                                            <th>precio</th>
                                            <th>peso</th>
                                            <th>categoria</th>
                                            <th>stock</th>
                                            <th>fecha_creacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($listaProductos as $producto){ ?>
                                            <tr>
                                                <td><?php echo $producto['id_producto']; ?></td>
                                                <td><?php echo $producto['referencia']; ?></td>
                                                <td><?php echo $producto['precio']; ?></td>
                                                <td><?php echo $producto['peso'] ; ?></td>
                                                <td><?php echo $producto['categoria']; ?></td>
                                                <td><?php echo $producto['stock'] ; ?></td>
                                                <td><?php echo $producto['fecha_creacion'] ; ?></td>
                                                <td>
                                                    <a href="../Controller/controladorProductos.php?editarProducto=<?php echo $producto['id_producto'] ?>" class="btn btn-secondary">Editar</a>
                                                    &nbsp;
                                                    <a href="../Controller/controladorProductos.php?producto=<?php echo $producto['id_producto'] ?>" class="btn btn-dark">Ver mas</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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

    <!-- Datatables -->
    <script src="../Lib/js/datatables.min.js"></script>
    <script src="js/datatables.js"></script>  
</body>
</html>