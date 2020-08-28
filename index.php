<?php
    if($_GET)
    {
        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
        require_once "controllers/" . $controle . ".class.php";
        $obj = new $controle();
        $obj->$metodo();
    }
    else
    {
        require_once "controllers/inicioControl.class.php";
        $obj = new inicioControl();
        $obj->index();
    }
?>