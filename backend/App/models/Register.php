<?php

namespace App\models;
defined("APPPATH") or die("Access denied");

use \Core\Database;
class Register
{

    public static function getUserRegister($email){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM registros_acceso WHERE email = '$email'
sql;

        return $mysqli->queryAll($query);
    }

    public static function getPais(){       
      $mysqli = Database::getInstance();
      $query=<<<sql
      SELECT * FROM paises 
      WHERE id_pais 
      IN (13,28,32,46,49,54,57,62,64,91,99,156,161,174,176,177,181,187,230,233);
  sql;
      return $mysqli->queryAll($query);
    }

    public static function getStateByCountry($id_pais){
      $mysqli = Database::getInstance(true);
      $query =<<<sql
      SELECT * FROM estados es
      INNER JOIN paises pa ON pa.id_pais = es.id_pais
      where pa.pais = '$id_pais';
  sql;
    
      return $mysqli->queryAll($query);
    }

    public static function getUserRegistrate($email){
      $mysqli = Database::getInstance(true);
      $query =<<<sql
      SELECT * FROM utilerias_asistenes WHERE email = '$email'
sql;

      return $mysqli->queryAll($query);
  }

  public static function getUserRegisterTrue($email){
    $mysqli = Database::getInstance(true);
    $query =<<<sql
    SELECT * FROM registros_acceso WHERE email = '$email' and politica is NULL
sql;

    return $mysqli->queryAll($query);
}

    public static function update($registro){
        $mysqli = Database::getInstance(true);
        $query=<<<sql
      UPDATE registros_acceso SET code = :code WHERE email = :email
sql;
        $parametros = array(
            ':code'=>$registro->_code,
            ':email'=>$registro->_email
        );
        $accion = new \stdClass();
        $accion->_sql= $query;
        $accion->_parametros = $parametros;
        $accion->_id = $registro->_email;
        return $mysqli->update($query, $parametros);
    }

    public static function updatePolitica($registro){
      $mysqli = Database::getInstance(true);
      $query=<<<sql
    UPDATE registros_acceso SET politica = :politica WHERE email = :email
sql;
      $parametros = array(
          ':politica'=>$registro->_politica,
          ':email'=>$registro->_email
      );
      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;
      $accion->_id = $registro->_email;
      return $mysqli->update($query, $parametros);
  }

    public static function updateImg($user){
        $mysqli = Database::getInstance(true);

        $query=<<<sql
        UPDATE registros_acceso SET img = ''  WHERE email = :email;
sql;
        $parametros = array(
          ':email'=>$user->_email
        );
  
  
          $accion = new \stdClass();
          $accion->_sql= $query;
          $accion->_parametros = $parametros;
          $accion->_id = $user->_administrador_id;
          // UtileriasLog::addAccion($accion);
         $mysqli->update($query, $parametros);



        $query1=<<<sql
        UPDATE registros_acceso SET img = :img  WHERE email = :email;
sql;
        $parametros1 = array(
          ':img'=>$user->_img,
          ':email'=>$user->_email
          
        );
  
  
          $accion = new \stdClass();
          $accion->_sql= $query1;
          $accion->_parametros = $parametros1;
          $accion->_id = $user->_administrador_id;
          // UtileriasLog::addAccion($accion);
          return $mysqli->update($query1, $parametros1);
      }

}
