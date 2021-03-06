<?php
/*
 * @author: Aroa Granero Omañas
 * @version: v1
 * Created on: 11/1/2022
 * Last modification: 11/1/2022
 */
?>
<header>
    <h1>Registro LoginLogout</h1>
</header>
<div id="containerRegistro">
    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <h3>Usuario: </h3>
        <input  type="text" name="CodUsuario" value="<?php
        if ($aErrores["CodUsuario"] == null && isset($_REQUEST["CodUsuario"])) { //Compruebo  que los campos del array de errores están vacíos y el usuario le ha dado al botón de enviar.
            echo $_REQUEST["CodUsuario"]; //Devuelve el campo que ha escrito previamente el usuario.
        }
        ?>">
        <span style="color:red">
            <?php
            if ($aErrores["CodUsuario"] != null) { //Compruebo que el array de errores no está vacío.
                echo $aErrores["CodUsuario"]; //Si hay errores, devuelve el campo vacío y muestra una advertencia de los errores y como tiene que estar escrito ese campo.
            }
            ?>
        </span>

        <br>

        <h3>Descripción de usuario: </h3>
        <input  type="text" name="DescUsuario" value="<?php
        if ($aErrores["DescUsuario"] == null && isset($_REQUEST["DescUsuario"])) { //Compruebo  que los campos del array de errores están vacíos y el usuario le ha dado al botón de enviar.
            echo $_REQUEST["DescUsuario"]; //Devuelve el campo que ha escrito previamente el usuario.
        }
        ?>">
        <span style="color:red">
            <?php
            if ($aErrores["DescUsuario"] != null) { //Compruebo que el array de errores no está vacío.
                echo $aErrores["DescUsuario"]; //Si hay errores, devuelve el campo vacío y muestra una advertencia de los errores y como tiene que estar escrito ese campo.
            }
            ?>
        </span>

        <br>
        
        <h3>Contraseña: </h3>
        <input  type="password" name="Password" value="<?php
        if ($aErrores["Password"] == null && isset($_REQUEST["Password"])) { //Compruebo  que los campos del array de errores están vacíos y el usuario le ha dado al botón de enviar.
            echo $_REQUEST["Password"]; //Devuelve el campo que ha escrito previamente el usuario.
        }
        ?>">
        <span style="color:red">
            <?php
            if ($aErrores["Password"] != null) { //Compruebo que el array de errores no está vacío.
                echo $aErrores["Password"]; //Si hay errores, devuelve el campo vacío y muestra una advertencia de los errores y como tiene que estar escrito ese campo.
            }
            ?>
        </span>

        <br>

        <h3>Confirmar contraseña: </h3>
        <input  type="password" name="ConfirmarPassword" value="<?php
        if ($aErrores["ConfirmarPassword"] == null && isset($_REQUEST["ConfirmarPassword"])) { //Compruebo  que los campos del array de errores están vacíos y el usuario le ha dado al botón de enviar.
            echo $_REQUEST["ConfirmarPassword"]; //Devuelve el campo que ha escrito previamente el usuario.
        }
        ?>">
        <span style="color:red">
            <?php
            if ($aErrores["ConfirmarPassword"] != null) { //Compruebo que el array de errores no está vacío.
                echo $aErrores["ConfirmarPassword"]; //Si hay errores, devuelve el campo vacío y muestra una advertencia de los errores y como tiene que estar escrito ese campo.
            }
            ?>
        </span>

        <br>
        
        <input type="submit" name="aceptarRegistro" class="btnlogin" value="ACEPTAR">
        <input style="background: rgba(255, 3, 3, 0.3);" type="submit" name="cancelar" class="btnlogin" value="CANCELAR">
    </form>
</div>
