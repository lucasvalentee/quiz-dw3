<?php
require_once('biblioteca/Autoload.php');
class ControllerPadrao {
  
  public static function getWindow() {
    !(isset($_SESSION['login']) && isset($_SESSION['senha'])) ? self::getInstanceView('Home') : self::getInstanceView('Login');
  }

  public static function getInstance($sObjectName) {
    return (class_exists($sObjectName)) ? new $sObjectName() : false;
  }
  
  public static function getInstanceModel($sObjectName) {
    return self::getInstance('Model' . $sObjectName);
  }

  public static function getInstanceView($sObjectName) {
    return self::getInstance('View' . $sObjectName);
  }

  public static function getInstanceController($sObjectName) {
    return self::getInstance('Controller' . $sObjectName);
  }

}