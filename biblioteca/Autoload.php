<?php
/**
 * Arquivo de autoload, ou seja, irá requisitar todos os arquivos automaticamente.
 */
const PHP_EXTESION = '.php';

spl_autoload_register('firstLoader');
spl_autoload_register('secondLoader');
spl_autoload_register('thirdLoader');
spl_autoload_register('fourthLoader');
spl_autoload_register('fifthLoader');
spl_autoload_register('sixthLoader');
spl_autoload_register('seventhLoader');
spl_autoload_register('eighthLoader');
spl_autoload_register('ninthLoader');
spl_autoload_register('tenthLoader');
spl_autoload_register('eleventhLoader');
spl_autoload_register('twelfthLoader');
spl_autoload_register('thirteenthLoader');
spl_autoload_register('fourteenthLoader');

function firstLoader($sClassName) {
  requireFile('../biblioteca/' . $sClassName . PHP_EXTESION);   
}

function secondLoader($sClassName) {
  requireFile('biblioteca/' . $sClassName . PHP_EXTESION);
}

function thirdLoader($sClassName) {
  requireFile('../biblioteca/assets/' . $sClassName . PHP_EXTESION);
}

function fourthLoader($sClassName) {
  requireFile('biblioteca/assets/' . $sClassName . PHP_EXTESION);
}

function fifthLoader($sClassName) {
  requireFile('../controller/' . $sClassName . PHP_EXTESION);
}

function sixthLoader($sClassName) {
  requireFile('controller/' . $sClassName . PHP_EXTESION);
}

function seventhLoader($sClassName) {
  requireFile('../model/' . $sClassName . PHP_EXTESION);
}

function eighthLoader($sClassName) {
  requireFile('model/' . $sClassName . PHP_EXTESION);
}

function ninthLoader($sClassName) {
  requireFile('../view/' . $sClassName . PHP_EXTESION);
}

function tenthLoader($sClassName) {
  requireFile('view/' . $sClassName . PHP_EXTESION);
}

function eleventhLoader($sClassName) {
  requireFile('../view/layouts/' . $sClassName . PHP_EXTESION);
}

function twelfthLoader($sClassName) {
  requireFile('view/layouts/' . $sClassName . PHP_EXTESION);
}

function thirteenthLoader($sClassName) {
  requireFile('../view/layouts/login/' . $sClassName . PHP_EXTESION);
}

function fourteenthLoader($sClassName) {
  requireFile('view/layouts/login/' . $sClassName . PHP_EXTESION);
}

/**
 * Realiza o require do arquivo, caso ele existir.
 */
function requireFile($sAdress) {
  if(file_exists($sAdress)) {
    require_once $sAdress;
  }
}