<?php
class ViewLogin {
  
  private $html;

  public function __construct() {
    $this->loadLoginHtml();
  }

  private function loadLoginHtml() {
    $this->setHtml('Isso é um teste mano véio.');
  }

  public function setHtml($html) {
    $this->html = $html;
  }

  public function getHtml() {
    return $this->html;
  }

}