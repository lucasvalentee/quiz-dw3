<?php
require_once('biblioteca/Autoload.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php include('view/layouts/head.html') ?>
  <body>
    <div class="container d-flex w-100 h-100 p-3 flex-column">
      <header class="mb-auto">Teste</header>
      <main role="main" class="d-flex w-100 h-100 inner flex-column justify-content-center">
        <div id="d-main" class="w-50 align-self-center b-color-default">
          <?php (isset($_SESSION['login']) && isset($_SESSION['senha'])) ? 'Você fez login!' : ControllerPadrao::getInstanceView('Login')->getHtml() ?>
        </div>
      </main>
      <?php include('view/layouts/footer.html') ?>
    </div>
  </body>
</html>