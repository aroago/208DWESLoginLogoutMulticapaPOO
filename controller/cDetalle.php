<?php

/*
 * @author: Aroa Granero Omañas
 * @since: 21/12/2021
 * @version: 1.0 Realizacion de cDetalle
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * Controlador de detalle
 */
    if(isset($_REQUEST['volver'])){  
        $_SESSION['paginaEnCurso'] = 'inicio';
        header('location: ./index.php');
        exit;
    }

    include $aVistas['layout'];
?>
