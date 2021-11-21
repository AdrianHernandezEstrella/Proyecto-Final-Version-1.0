<?php

/* @var $_GET type */
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "home":
        require_once('./views/home.php');
        break;
    case "infomuni":
        require_once('./views/infomuni.php');
        break;
    case "productos":
        require_once('./views/productos.php');
        break;
    case "cultura":
        require_once('./views/cultura.php');
        break;
    case "login":
        require_once('./views/login.php');
        break;
    
    case "bienvenido":
        require_once('./views/bienvenido.php');
        break;
    case "logout":
        $session_destroy = session_destroy();
        header("location: ./index.php?menu=home");
        
    break;
    

    default:
        require_once('./views/home.php');
}
?>