<?php
/**
 * Class AppError
 *
 * Fichero con la clase AppError que nos servira para crear un objeto de la clase AppError
 *
 * PHP version 7.4
 */

/**
 * Clase Error
 * 
 * Clase que crea y utiliza errores generados en el uso de la aplicación
 * 
 * @author: Aroa Granero Omañas
 * @package LoginLogout
 * @since: 21/01/2022
 * @version: 1.0 Realizacion de cError
 * @copyright: Copyright (c) 2022, Aroa Granero Omañas
 */
class AppError{
    
    private $codError;
    private $descError;
    private $archivoError;
    private $lineaError;
    private $paginaSiguiente;
    
    function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }
    function getCodError() {
        return $this->codError;
    }
    
    function getDescError() {
        return $this->descError;
    }

    function getArchivoError() {
        return $this->archivoError;
    }

    function getLineaError() {
        return $this->lineaError;
    }
    
    function getPaginaSiguiente() {
        return $this->paginaSiguiente;
    }


}