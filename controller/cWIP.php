<?php
/*
 * @author: Aroa Granero Omañas
 * @since: 21/01/2022
 * @version: 1.0 Realizacion de cWIP
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * Controlador de WIP
 */
  if(isset($_REQUEST['volver'])){
        $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
        header('location: ./index.php');
        exit;
    }

    include $aVistas['layout'];
?>
