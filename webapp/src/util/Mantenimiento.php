<?php
namespace Utel\Util;

class Mantenimiento{

   private $id;
   private $id_vehiculo; 
   private $marca;
   private $placa;
   private $serie;
   private $num_inventario;
   private $fecha;
   private $mantenimiento;
   private $observaciones;

   public const SQL_SELECT_MANTENIMIENTO = "SELECT * FROM mantenimiento";
   public const SQL_SELECT_MANTENIMIENTO_BY_ID = "SELECT * FROM mantenimiento WHERE id=?";
   public const SQL_UPDATE_MANTENIMIENTO = "UPDATE mantenimiento SET marca=?, placa=?, serie=?, num_inventario=?, fecha=?, mantenimiento=?, observaciones=? WHERE id=?";
   public const SQL_DELETE_MANTENIMIENTO = "DELETE FROM mantenimiento WHERE id=?";
   public const SQL_INSERT_MANTENIMIENTO = "INSERT INTO mantenimiento (id_vehiculo, marca, placa,serie, num_inventario,  fecha, mantenimiento, observaciones) VALUES(?,?,?,?,?,?,?,?)";
   
   public function __get($nombre) {
    switch($nombre) {
        case 'id': return $this->id;
        case 'id_vehiculo': return $this->id_vehiculo;
        case 'marca': return $this->marca;
        case 'placa': return $this->placa;
        case 'serie': return $this->serie;
        case 'num_inventario': return $this->num_inventario;
        case 'fecha': return $this->fecha;
        case 'mantenimiento': return $this->mantenimiento;
        case 'observaciones': return $this->observaciones;
        default: return null;
    }
}


public function __set($nombre, $valor) {
    switch($nombre) {
        case 'id': return $this->id = (int) $valor; break;
        case 'id_vehiculo': return $this->id_vehiculo = (int) $valor; break;
        case 'marca': return $this->marca = $valor; break;
        case 'placa': return $this->placa = $valor; break;
        case 'serie': return $this->serie = $valor; break;
        case 'num_inventario': return $this->num_inventario = $valor; break;
        case 'fecha': return $this->fecha = $valor; break;
        case 'mantenimiento': return $this->mantenimiento = $valor; break;
        case 'observaciones': return $this->observaciones = $valor; break;
    }
}

public function __toString(): String {
    return "MANTENIMIENTO: $this->id | $this->marca $this->serie | $this->fecha";

}

}
?>


