<?php

$oLogin = new Login();
$oLogin->show();

class Login {

  public function show() {
    echo $this->getHtmlLogin();
  }

  protected function getHtmlLogin() {
    
  }

}