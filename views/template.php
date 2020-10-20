<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php include "modules/head.php"; ?> <!-- Modulo de Head -->

<body class="hold-transition sidebar-mini login-page">

  <?php 
  
    require_once "./controllers/vistasControllers.php";

    $vt = new vistasControllers();
    $vistasR=$vt -> obtener_vitas_controllers();

    if($vistasR=="login"):
      require_once "./views/contenido/login-views.php";
    else:
  ?>

  <!-- Navbar -->
  <?php include "modules/navbar.php";?>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <?php include "modules/navegacion.php";?>

  <!-- Content Wrapper. Contains page content -->
  <?php include "modules/breadchrome.php";?>
    <!-- /.content-header -->

    <!-- Main content -->
   <?php require_once $vistasR; ?>

  <!-- Control Sidebar -->
  <?php include "modules/chat.php";?>
  <!-- /.control-sidebar -->
  
  <!-- Main Footer -->
  <?php include "modules/footer.php"; ?>

<!-- ./wrapper -->
<?php endif; ?>
<!-- REQUIRED SCRIPTS -->

<?php include "modules/script.php";  ?>

</body>
</html>
