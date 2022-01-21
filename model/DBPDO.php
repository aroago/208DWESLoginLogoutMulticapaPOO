<?php
/**
 * Class DBPDO
 *
 * Clase para conexión con la base de datos y ejecución de consultas mediante PDO.
 *
 * PHP version 7.4
 */

/**
 * Clase para conexión con la base de datos y ejecución de consultas mediante PDO.
 * 
 * @author: Aroa Granero Omañas
 * @package LoginLogout
 * @since: 21/01/2022
 * @version: 1.0 Realizacion de DBPDO
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 * 
 */
class DBPDO implements DB{//clase para ejecucar consultas sql
/**
 * function que ejecuta las sentencias sql y devuelbe el resultado. En php
 * @param String $sentenciaSQL recibe la sentencia sql.
 * @param Array|null $parametros recice los parametros necesarios para la sentencia.
 * @return PDOStatement devuelve el resultado de la consulta
 */
    public static function ejecutarConsulta($sentenciaSQL, $parametros=null) {
        try {
            $miDB = new PDO(HOST, USER, PASSWORD); //Establezco la conexión a la base de datos instanciado un objeto PDO.
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Cuando se produce un error lanza una excepción utilizando PDOException.

            $consulta = $miDB->prepare($sentenciaSQL); //Preparo la consulta.
            $consulta->execute($parametros); //Ejecuto la consulta con los parametros si tiene.
          
        } catch (PDOException $miExcepcionPDO) {
            $_SESSION['paginaEnCurso'] = 'error';
            $_SESSION['error'] = new AppError($miExcepcionPDO->getCode(), $miExcepcionPDO->getMessage(), $miExcepcionPDO->getFile(), $miExcepcionPDO->getLine(), $_SESSION['paginaAnterior']);
            header('Location: index.php');
            exit;
        }
        return $consulta;
    }

}
