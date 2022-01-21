<?php

/*
 * @author: Aroa Granero Omañas
 * @since: 21/12/2021
 * @version: 1.0 Realizacion del index
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * Index principal de la aplicacion
 */
ob_start();
//Constantes de la aplicación.
require_once './config/configApp.php';

//Se inicia o recupera la sesión
session_start();

//Para mostrar la ventana del login, llama al controlador del mismo.
if(!isset($_SESSION['paginaEnCurso'])){
    $_SESSION['paginaEnCurso'] = 'inicioPublica';
}
// Cargado de la página indicada.
require_once $aControladores[$_SESSION['paginaEnCurso']];

