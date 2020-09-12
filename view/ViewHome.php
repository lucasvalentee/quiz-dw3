<?php
class ViewHome {

    private $html;
    
    public function __construct() {
        $this->loadHtmlHome();
    }        
    
    private function loadHtmlHome() {
        $this->setHtml($this->getHtmlHome());   
    }
    
    public function getHtml() {
        return $this->html;
    }

    public function setHtml($html) {
        $this->html = $html;
    }
    
    private function getHtmlHome() {
        ob_start();

        include_once('layouts/home/home.html');

        return ob_get_contents();
    }

}