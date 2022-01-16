<?php
 if(!isset($_SESSION['usuarioDAW208LoginLogoutMulticapaPOO'])){
        header('location: ./index.php');
        exit;
    }

    if(isset($_REQUEST['logout'])){
        session_destroy();
        include $aControladores['login'];
        header('location: ./index.php');
        exit;
    }
    
    if(isset($_REQUEST['detalle'])){
        $_SESSION['paginaAnterior']= $_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso'] = $aControladores['detalle'];

        header('location: ./index.php');
        exit;
    }
    
    if(isset($_REQUEST['mtoDep'])){
        $_SESSION['paginaAnterior']= $_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso'] = $aControladores['WIP'];

        header('location: ./index.php');
        exit;
    }

   
    $vistaEnCurso=$aVistas['inicio'];
    include $aVistas['layout'];
?>
