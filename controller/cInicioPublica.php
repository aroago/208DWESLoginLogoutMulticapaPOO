<?php

/*
 * @author: Aroa Granero Omañas
 * @version: v1
 * Created on: 11/1/2022
 * Last modification: 11/1/2022
 */

if(isset($_REQUEST['iniciar'])){
        $_SESSION['paginaEnCurso'] = 'login';
        header('Location: index.php');
        
        exit;
    }
    
    include $aVistas['layout'];
?>