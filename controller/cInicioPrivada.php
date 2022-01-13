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
        $_SESSION['paginaEnCurso'] = $aControladores['detalle'];
        header('location: ./index.php');
        exit;
    }
    
    if(isset($_REQUEST['mtoDep'])){
        $_SESSION['paginaEnCurso'] = $aControladores['WIP'];
        header('location: ./index.php');
        exit;
    }
    $aVInicioPrivado = [
    'descUsuario' => $oUsuario->getDescUsuario(),
    'numConexiones' => $oUsuario->getNumConexiones(),
    'fechaHoraUltimaConexionAnterior' => $oUsuario->getFechaHoraUltimaConexionAnterior()
];
    
    $vistaEnCurso=$aVistas['inicio'];
    include $aVistas['layout'];
?>
