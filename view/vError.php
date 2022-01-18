<?php

/**
 * @author: Aroa Granero Omañas
 * @version: v1
 * Created on: 18/1/2022
 * Last modification: 18/1/2022
 **/
?>
 <h3>Ha sucedido el siguiente error:</h3>
    <div>
        <table>
            <tr>
                <th>Error</th>
                <td><?php echo $aVError['error']; ?></td>
            </tr>
            <tr>
                <th>Código</th>
                <td><?php echo $aVError['codigo']; ?></td>
            </tr>
            <tr>
                <th>Archivo</th>
                <td><?php echo $aVError['archivo']; ?></td>
            </tr>
            <tr>
                <th>Línea</th>
                <td><?php echo $aVError['linea']; ?></td>
            </tr>
            <tr>
                <th>Página </th>
                <td><?php echo $aVError['linea']; ?></td>
            </tr>
        </table>
    </div>
    <form method="post">
        <button type="submit" name="volver" value="Volver">Cerrar y Volver</button>
    </form>
