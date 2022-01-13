<?php
/*
 * @author: Aroa Granero Omañas
 * @version: v1
 * Created on: 10/1/2022
 * Last modification: 10/1/2022
 */
class UsuarioPDO implements UsuarioDB{
    /**
     * Comprobación de la existencia previa de un usuario y de si su contraseña es correcta en la base de datos.
     * 
     * @param type $codUsuario codigo de usuario a comprobar
     * @param type $password Contrasenya del usuario a comprobar
     * @return \Usuario
     */
    public static function validarUsuario($codUsuario, $password){
          $consulta = <<<PDO
                SELECT T01_FechaHoraUltimaConexion FROM T01_Usuario
                WHERE T01_CodUsuario='{$codUsuario}' AND
                T01_Password=SHA2("{$codUsuario}{$password}", 256);
            PDO;
            
            $oResultado = DBPDO::ejecutarConsulta($consulta);
            $oUsuario = $oResultado->fetchObject();

            if(!$oUsuario){
                return false;
            }else{
                //Guardo la hora actual
                $oDateTime = new DateTime();
                
                $consulta2 = <<<PDO
                    UPDATE T01_Usuario SET T01_NumConexiones=T01_NumConexiones+1,
                    T01_FechaHoraUltimaConexion = '{$oDateTime->format("y-m-d h:i:s")}'
                    WHERE T01_CodUsuario='{$codUsuario}';
                PDO;
                
                DBPDO::ejecutarConsulta($consulta2);
                
                return $oUsuario;
            }
    }
    /**
     * Dado un código de usuario, comprueba que no exista ya en la base de datos.
     * @param type $codUsuario cosigo del usuario a comprobar.
     * @return boolean devuelve true o false segun si existe o no previamente.
     */
     public static function validarCodNoExiste($codUsuario){
        $usuarioNoExiste = true; 
        
        $consulta = "Select * from T01_Usuario where T01_CodUsuario=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario]); 
        
        if($resultado->rowCount()>0){
            $usuarioNoExiste = false; 
        }
        
        return $usuarioNoExiste;
    }
    /**
     * Insercion y registro de un usuario en la base de datos
     * 
     * @param type $codUsuario codigo del usuario a registrar
     * @param type $password contraseña del usuario que se va a registrar
     * @param type $descripcion una descripcion breve del usuario
     * @return \Usuario
     */
    public static function altaUsuario($codUsuario, $password, $descripcion){
        $oUsuario = null;

        $consulta = "Insert into T01_Usuario (T01_CodUsuario, T01_DescUsuario, T01_Password , T01_NumConexiones, T01_FechaHoraUltimaConexion) values (?,?,?,1,?)";
        $passwordEncriptado=hash("sha256", ($codUsuario.$password));
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $descripcion, $passwordEncriptado,  time()]);

        
        $consultaDatosUsuario = "Select * from T01_Usuario where T01_CodUsuario=?";
        $resultadoDatosUsuario = DBPDO::ejecutaConsulta($consultaDatosUsuario, [$codUsuario]);
        
        if($resultadoDatosUsuario->rowCount()>0){ 
            $oUsuarioConsulta = $resultadoDatosUsuario->fetchObject(); 
            $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
        }

        return $oUsuario;
    }
     
}
