<?php
require_once('biblioteca/Autoload.php');
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php include('view/layouts/head.html') ?>
  <body>
    <div class="container d-flex w-100 h-100 p-3 flex-column">
      <header class="mb-auto"></header>
      <main role="main" class="d-flex w-100 h-100 inner flex-column justify-content-center">      
        <div id="d-main" class="w-50 align-self-center b-color-default h-min-default">          
          <?php            
            validaLogin();            
            ControllerPadrao::getWindow();
          ?>
      </main>
      <?php include('view/layouts/footer.html') ?>      
    </div>
  </body>
</html>

<?php
function validaLogin() {
  if (isset($_POST['login']) && isset($_POST['senha'])) {
    $oConexao = new Conexao();
    echo 'teste';
    $sLogin = $_POST['login'];
    $sSenha = $_POST['senha'];
    $oQuery = pg_query($oConexao->getConexao(), "SELECT * FROM tbusuario");
    while ($aDados = pg_fetch_assoc($oQuery)) {
        $bLogin = $aDados['usunome'];
        $bSenha = $aDados['ususenha'];
        if ($sLogin == $bLogin && $sSenha == $bSenha) {
            $_SESSION['login'] = $sLogin;
            $_SESSION['senha'] = $sSenha;                                       
        }
    }
  }
}