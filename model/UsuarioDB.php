<?php

/**
 * Interfaz para conexión de usuarios con la base de datos.
 * 
 * @author Aroa Granero Omañas
 * Fecha Creacion:  12/01/2022
 * Última modificación: 12/01/2022
 */

/**
 * Interfaz UsuarioDB
 * 
 * Interfaz que implementaremos en la clase UsuarioPDO
 * 
 * @author Aroa Granero Omañas
 * @package LoginLogout
 * @since 12/01/2022
 * @copyright Copyright (c) 2022, Aroa Granero Omañas
 * @version 1.0 Realizacion de UsuarioDB
*/
interface UsuarioDB {
    /**
     * Comprobación de la existencia previa de un usuario y de si su contraseña
     * es correcta en la base de datos.
     * 
     * @param type $codUsuario Código del usuario a comprpobar.
     * @param type $password Contraseña del usuario a comprobar.
     */
    public static function validarUsuario($codUsuario, $password);
}
