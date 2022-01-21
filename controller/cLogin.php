<?php
/*
 * @author: Aroa Granero Omañas
 * @since: 21/01/2022
 * @version: 1.0 Realizacion de cLogin
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * Controlador de login
 */
if(isset($_REQUEST['login'])){    
        if(validacionFormularios::comprobarAlfaNumerico($_REQUEST["usuario"], 255, MIN_TAMANIO, OBLIGATORIO)==null && validacionFormularios::comprobarAlfaNumerico($_REQUEST["password"], 8, MIN_TAMANIO, 1, OBLIGATORIO)==null){
            $oUsuario = UsuarioPDO::validarUsuario($_REQUEST["usuario"], $_REQUEST["password"]);
            if($oUsuario){
                $_SESSION['usuarioDAW208LoginLogoutMulticapaPOO'] = $oUsuario;
                
                $_SESSION['paginaEnCurso'] = 'inicio';
                header('Location: index.php');
                exit;
            }
        }
    }
require_once $aVistas['layout'];
?> 
