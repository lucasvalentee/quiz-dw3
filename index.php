<?php
require_once('biblioteca/Autoload.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php include('view/layouts/head.html') ?>
  <body class="text-center">
    <div class="container d-flex w-100 h-100 p-3 flex-column">
      <header class="mb-auto">Teste</header>
      <main role="main" class="d-flex w-100 h-100 inner flex-column justify-content-center">
        <div class="w-50 h-50 align-self-center" style="background-color:red;">

        </div>
        <?php echo (isset($_SESSION['login']) && isset($_SESSION['senha'])) ? 'Você fez login!' : ControllerPadrao::getInstanceView('Login')->getHtml() ?>
      </main>
      <?php include('view/layouts/footer.html') ?>
    </div>
  </body>
</html>
