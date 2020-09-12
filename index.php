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
        <div class="w-50 h-50 align-self-center" style="background-color:gray;">         
          <?php echo ControllerPadrao::getInstanceView('Home')->getHtml() ?>



          <div class="modal fade" id="modalCadastros" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Quizz</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form id="frmCadastro">
                            <div class="form-group">
                                <p id='pergunta'>1- Você gosta de programar? </p>
                                <input type="hidden" id='codigo' value='1'>
                            </div>
                            <div class="form-group">                                
                                Sim <input type="checkbox" name="resposta[]" id="r1">
                            </div>
                            <div class="form-group">                               
                                Não <input type="checkbox" name="resposta[]" id="r2">
                            </div>
                            <div class="form-group">
                                Talvez <input type="checkbox" name="resposta[]" id="r3">
                            </div>                                                    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" id="btnGravar" class="btn btn-primary">Gravar</button>
                        </form>
                    </div>                    
                  </div>
                </div>
            </div>            
        </div>        



      </main>
      <?php include('view/layouts/footer.html') ?>
    </div>
  </body>
</html>