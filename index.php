<?php
require_once('biblioteca/Autoload.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php include('view/layouts/head.html') ?>
  <body class="text-center">
    <div class="container d-flex w-100 h-100 p-3 flex-column">
      
      <?php echo (isset($_SESSION['login']) && isset($_SESSION['senha'])) ? 'Você fez login!' : ControllerPadrao::getInstanceView('Login')->getHtml() ?>
    </div>
  </body>
  <?php include('view/layouts/footer.html') ?>
</html>