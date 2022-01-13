<?php

/*
 * @author: Aroa Granero Omañas
 * @version: v1
 * Created on: 10/1/2022
 * Last modification: 11/1/2022
 */
class Usuario{
        private $codUsuario;
        private $password;
        private $descUsuario;
        private $fechaHoraUltimaConexion;
        private $numConexiones;
        private $perfil;
        
        function __construct($codUsuario, $password, $descUsuario, $numConexiones, $fechaHoraUltimaConexion, $fechaHoraUltimaConexionAnterior, $perfil) {
            $this->codUsuario = $codUsuario;
            $this->password = $password;
            $this->descUsuario = $descUsuario;
            $this->numConexiones = $numConexiones;
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
            $this->perfil = $perfil;
        }

        function getCodUsuario(){
            return $this->codUsuario;
        }
        function getPassword(){
            return $this->password;
        }
        function getDescUsuario(){
            return $this->descUsuario;
        }
        function getFechaHoraUltimaConexion(){
            return $this->fechaHoraUltimaConexion;
        }
        function getFechaHoraUltimaConexionAnterior(){
            return $this->fechaHoraUltimaConexionAnterior;
        }
        function getNumConexiones(){
            return $this->numConexiones;
        }
        function getPerfil(){
            return $this->perfil;
        }
        
        function setCodUsuario($codUsuario){
           $this->codUsuario=$codUsuario; 
        }
        function setPassword($password){
            $this->password=$password;
        }
        function setDescUsuario($descUsuario){
            $this->descUsuario=$descUsuario;
        }
        function setFechaHoraUltimaConexion($fechaHoraUltimaConexion){
            $this->fechaHoraUltimaConexion=$fechaHoraUltimaConexion;
        }
        function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior){
            return $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
        }
        function setNumConexiones($numConexiones){
            $this->numConexiones=$numConexiones;
        }
        function setPerfil($perfil){
            $this->perfil=$perfil;
        }
    }
?>
