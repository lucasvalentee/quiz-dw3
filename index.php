<?php

require_once('layouts/head.html');
require_once('layouts/body.html');
require_once('layouts/footer.html');

(isset($_SESSION['login']) && isset($_SESSION['senha'])) ? include 'home.php' : include 'login.php';