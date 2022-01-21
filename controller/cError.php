<?php

/*
 * @author: Aroa Granero Omañas
 * @since: 21/01/2022
 * @version: 1.0 Realizacion de cError
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * Controlador de error
 */
if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('location: ./index.php');
    exit;
}

// Array con la información de la vista.
$aVError = [
    'error' => $_SESSION['error']->getDescError(),
    'codigo' => $_SESSION['error']->getCodError(),
    'archivo' => $_SESSION['error']->getArchivoError(),
    'linea' => $_SESSION['error']->getLineaError(),
    'paginaSiguiente' => $_SESSION['error']->getPaginaSiguiente()
];

include $aVistas['layout'];

