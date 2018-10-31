<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo COMPANY ?></title>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Resource/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>Resource/css/main.css">

  </head> 
  <body>

    <?php 
      
      $peticionAjax = false;

      require_once "./Controller/viewController.php"; 
      $view = new viewController();
      $Respuesta = $view -> obtener_vistas_controller();
      
      if($Respuesta == "login" || $Respuesta == "404"):
          if ($Respuesta == "login") {
            require_once "./View/contenidos/login-view.php";
          } else {
            require_once "./View/contenidos/404-view.php";
          }
      
      else:
        session_start(); 
    ?>
    
    <!-- Nav bar-->
      <?php include "./View/modulos/header.php"; ?>
    <!-- Nav bar-->
    
    <!--<section class="full-box dashboard-contentPage" style="padding: 20px;">-->
       <?php require_once $Respuesta; ?>
    <!--</section>-->

    <!-- Footer -->
      <?php include "View/modulos/footer.php"; ?>
    <!-- Footer Elements -->

  <?php endif; ?>
    
    <script src="<?php echo SERVERURL; ?>Resource/js/biblioteca.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="<?php echo SERVERURL; ?>Resource/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo SERVERURL; ?>Resource/js/bootstrap.min.js"></script>
    <script src="<?php echo SERVERURL; ?>Resource/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
  </body>

</html>