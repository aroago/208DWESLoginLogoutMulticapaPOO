<?php

/**
 * Class DB
 *
 * Fichero con la interfaz DB que contiene el modelo de los metodos de DBPDO
 *
 * PHP version 7.4
 */

/**
 * Interfaz para conexión con la base de datos y ejecución de consultas sobre la misma.
 * 
 * @author: Aroa Granero Omañas
 * @since: 21/01/2022
 * @version: 1.0 Realizacion de DB
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * 
 */
interface DB {
    /**
     * Metodo ejecutarConsulta()
     * 
     * @param String $consulta
     * @param Array|null $parametros Array|null $parametros Parámetros con los que completar la sentencia.
     */
    public static function ejecutarConsulta($consulta, $parametros=null);
}
