<?php

/*
 * @author: Aroa Granero Omañas
 * @since: 21/01/2022
 * @version: 1.0 Realizacion de cInicioPublica
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * Controlador de Inicio Publica
 */

if(isset($_REQUEST['iniciar'])){
        $_SESSION['paginaEnCurso'] = 'login';
        header('Location: index.php');
        
        exit;
    }
    
    include $aVistas['layout'];
?>