<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \Core\MasterDom;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Data {

  public static function update($user){
    $mysqli = Database::getInstance(true);
    $query=<<<sql
    UPDATE registros_acceso SET especialidad = :especialidad, nombre = :nombre, segundo_nombre = :segundo_nombre, apellido_materno = :apellido_materno, apellido_paterno = :apellido_paterno, genero = :genero, pais = :pais, telefono = :telefono, alergia = :alergia, alergia_cual = :alergia_cual, politica = 1  WHERE email = :email;
sql;
    $parametros = array(
      ':especialidad'=>$user->_especialidad,
      ':nombre'=>$user->_nombre,
      ':segundo_nombre'=>$user->_segundo_nombre,
      ':apellido_paterno'=>$user->_apellido_paterno,
      ':apellido_materno'=>$user->_apellido_materno,
      ':genero'=>$user->_genero,
      ':pais'=>$user->_pais,
      ':telefono'=>$user->_telefono,
      ':alergia'=>$user->_alergia,
      ':alergia_cual'=>$user->_alergia_cual,
      ':email'=>$user->_email
      
    );


      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $user->_administrador_id;
      // UtileriasLog::addAccion($accion);
      return $mysqli->update($query, $parametros);
  }

  public static function updateAccount($user){
    $mysqli = Database::getInstance(true);
    $query=<<<sql
    UPDATE registros_acceso SET especialidad = :especialidad, nombre = :nombre, segundo_nombre = :segundo_nombre, apellido_materno = :apellido_materno, apellido_paterno = :apellido_paterno, genero = :genero, telefono = :telefono, alergia = :alergia  WHERE email = :email;
sql;
    $parametros = array(
      ':especialidad'=>$user->_especialidad,
      ':nombre'=>$user->_nombre,
      ':segundo_nombre'=>$user->_segundo_nombre,
      ':apellido_paterno'=>$user->_apellido_paterno,
      ':apellido_materno'=>$user->_apellido_materno,
      ':genero'=>$user->_genero,
      // ':pais'=>$user->_pais,
      ':telefono'=>$user->_telefono,
      ':alergia'=>$user->_alergia,
      ':email'=>$user->_email
      
    );


      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $user->_administrador_id;
      // UtileriasLog::addAccion($accion);
      return $mysqli->update($query, $parametros);
  }

  public static function insert($register)
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
        INSERT INTO utilerias_asistentes VALUES(null,:id_registro_acceso,:usuario,:contrasena,:politica,1)                        
sql;

        $parametros = array(
            ':id_registro_acceso' => $register->_id_registro_acceso,
            ':usuario' => $register->_email,
            ':contrasena' => $register->_password,
            ':politica' => $register->_politica
        );

        $id = $mysqli->insert($query, $parametros);
        $accion = new \stdClass();
        $accion->_sql = $query;
        $accion->_parametros = $parametros;
        $accion->_id = $id;

        return $id;
    }
   
}
