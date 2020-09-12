<?php
class ViewLogin {
  
  private $html;

  public function __construct() {
    $this->loadLoginHtml();
  }

  private function loadLoginHtml() {
    $this->setHtml($this->getHtmlLogin());
  }

  public function setHtml($html) {
    $this->html = $html;
  }

  public function getHtml() {
    return $this->html;
  }

  private function getHtmlLogin() {
      ?>
        
        <form class="p-5 text-white">
          <div class="form-group">
            <label for="nome">Nome:&nbsp;</label>
            <input type="text" class="form-control" id="nomeLogin" aria-describedby="nomeLogin">
          </div>
          <div class="form-group">
            <label for="senha">Senha:&nbsp;</label>
            <input type="password" class="form-control" id="senhaLogin">
          </div>
          <button type="submit" onclick="alert('Logou')" class="btn btn-success">Login</button>
          <button type="submit" onclick="alert('Cadastrou ae')" class="btn btn-primary">Cadastre-se</button>
        </form>

      <?php
  }

}