<?php

function modulos($modulo){
  include_once 'header.php';
  include_once 'menu.php';
  include_once $modulo.'.php';
  include_once 'footer.php';
}

$modulo = 'inicio'; // valor por defecto

if(isset($_GET['m'])){
    $modulo = $_GET['m'];
}

switch ($modulo) {
    case 'logout':
        session_destroy();
        include_once 'login.php';
        break;
    default:
        if (!file_exists($modulo.'.php')) {
            $modulo = '404'; 
        }
        modulos($modulo);
        break;
}

