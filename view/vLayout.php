<?php
/*
 * @author: Aroa Granero Omañas
 * @version: v1
 * Created on: 10/1/2022
 * Last modification: 10/1/2022
 * Contiene el head con el estilo básico, título y metas. También footer.
 */
?>
<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="aroaGraneroOmañas">
        <meta name="application-name" content="Sitio web de DAW2">
        <meta name="description" content="Inicio de la pagina web">
        <meta name="keywords" content=" index" >
        <meta name="robots" content="index, follow" />
        <title>App Login-Logout POO</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link href="webroot/css/estilosEjer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
            include $vistaEnCurso; //Requiere la vista indicada en el controlador correspondiente. 
        ?>
        <footer class="piepagina">
            <a href="https://github.com/aroago/208DWESLoginLogoutMulticapaPOO" target="_blank"><img src="./webroot/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a><a href="https://daw208.ieslossauces.es/">2021 Todos los derechos reservados AroaGO.</a> Fecha Modificación:16/01/2022</p> 
        </footer>
    </body>
</html>

