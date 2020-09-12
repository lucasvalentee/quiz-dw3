<?php
require_once('biblioteca/Autoload.php');
include('view/layouts/head.html');
include('view/layouts/body.html');

ControllerPadrao::getInstanceController('Login');

include('view/layouts/footer.html')
?>