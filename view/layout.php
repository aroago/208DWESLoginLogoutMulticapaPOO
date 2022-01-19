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
        <style>
            #reloj{
                height: 50vh;
                width: 100vw;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            img{
                width: 80px;
                height: 80px;
            }
        </style>
        <script>
            window.addEventListener("load", nuevoReloj);
            function nuevoReloj() {
                document.querySelector("#reloj").innerHTML = "";
                momentoActual = new Date();
                hora = momentoActual.getHours();
                minuto = momentoActual.getMinutes();
                segundo = momentoActual.getSeconds();
                hora1 = parseInt(hora / 10);
                hora2 = hora % 10;
                minuto1 = parseInt(minuto / 10);
                minuto2 = minuto % 10;
                segundo1 = parseInt(segundo / 10);
                segundo2 = segundo % 10;
                puntos = "puntos";

                horaImprimible = crearImagen(hora1) + crearImagen(hora2) + crearImagen(puntos) + crearImagen(minuto1) + crearImagen(minuto2) + crearImagen(puntos) + crearImagen(segundo1) + crearImagen(segundo2);
            }
            setInterval("nuevoReloj()", 1000);

            function crearImagen(numero) {
                var img = document.createElement("img");
                img.setAttribute("src", `../208DWESLoginLogoutMulticapaPOO/webroot/img/${numero}.png`);
                img.width = "100";
                img.height = "100";
                img.alt = ` ${numero}`;
                var src = document.getElementById("reloj");
                src.appendChild(img);
            }
        </script>
    </head>
    <body>
        <?php include_once $aVistas[$_SESSION['paginaEnCurso']]; //Requiere la vista indicada en el controlador correspondiente. ?>
        <footer class="piepagina">
            <a href="https://github.com/aroago/208DWESLoginLogoutMulticapaPOO" target="_blank"><img src="./webroot/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a><a href="https://daw208.ieslossauces.es/">2021 Todos los derechos reservados AroaGO.</a> Fecha Modificación:09/12/2021</p> 
        </footer>
    </body>
</html>

