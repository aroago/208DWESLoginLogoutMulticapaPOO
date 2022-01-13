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
    $select = <<<QUERY
        SELECT T01_DescUsuario, T01_NumConexiones FROM T01_Usuario
        WHERE T01_CodUsuario='{$_SESSION['usuarioDAW208LoginLogoutMulticapaPOO']}';
    QUERY;
    $oResultado = DBPDO::ejecutarConsulta($select)->fetchObject();

    $descUsuario = $oResultado->T01_DescUsuario;
    $numConexiones = $oResultado->T01_NumConexiones; 
   
    $vistaEnCurso=$aVistas['inicio'];
    include $aVistas['layout'];
?>
