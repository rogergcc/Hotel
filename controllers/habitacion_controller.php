<?php

/**
 * Siempre se debe invocar antes al modelo que a la vista
 */ //require_once('models/Habitacion_model.php');
/* class RepositorioHabitacion{



  //$Habitacion = new Habitacion_model();
  //$data = $Habitacion->get_habitacion();
  //$data = $Habitacion.get_habitacion();
  public static function obtener_todos($conexion){

    $habitaciones = array();
    try{
       include_once 'Habitacion_model';
       $sql = 'select *from habitacion';
       $sentencia = $conexion -> prepare($sql);
       $resultado = $sentencia ->fetchAll();
       if (count($resultado)) {
         # code...
         foreach ($resultado as $fila) {
           # code...
           $habitaciones[] = new Habitacion_model(
            $fila['id_habitacion'],
            $fila['num_habitacion'],
            $fila['nro_piso'],
            $fila['desc_habitacion'],
            $fila['usu_mod']
           );
         }
       }
    }catch(PDOException $ex){
      print "ERROR" . $ex ->getMessage();
    }
    return $habitaciones;
  }
  
}
require_once('views/Habitacion_view.php');
?>*/
require_once('models/Habitacion_model.php');
$Habitacion = new Habitacion_model();
$Habitaciones = $Habitacion->get_habitacion();

require_once('views/Habitacion_view.php');
