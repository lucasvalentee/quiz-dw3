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
    ob_start();
      ?>
        <html></html>
      <?php
    
  }

}