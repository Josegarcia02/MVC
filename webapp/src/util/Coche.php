<?php
namespace Utel\Util;

class Coche {

     private $id;
     private $num_inventario;
     private $serie;
     private $vehiculo;
     private $marca;
     private $modelo;
     private $placa;
     private $color;
     private $asignado;
     private $resguardo;
     private $observaciones;

     public const SQL_SELECT_COCHE ="SELECT*FROM vehiculos";
     public const SQL_SELECT_COCHE_BY_ID ="SELECT*FROM vehiculos WHERE id=?";
     public const SQL_UPDATE_COCHE ="UPDATE vehiculos SET num_inventario=?, serie=?, vehiculo=?, marca=?, modelo=?, placa=?, color=?, asignado=?, resguardo=?, observaciones=? WHERE id=?";
     public const SQL_DELETE_COCHE ="DELETE FROM vehiculos WHERE id=?";
     public const SQL_INSERT_COCHE ="INSERT INTO vehiculos (num_inventario,serie,vehiculo,marca,modelo,placa,color,asignado,resguardo,observaciones) VALUES (?,?,?,?,?,?,?,?,?,?)";

     public function __get($atributo) {
         switch($atributo) {
             case 'id': return $this->id;
             case 'num_inventario': return $this->num_inventario;
             case 'serie': return $this->serie;
             case 'vehiculo': return $this->vehiculo;
             case 'marca': return $this->marca;
             case 'modelo': return $this->modelo;
             case 'placa': return $this->placa;
             case 'color': return $this->color;
             case 'asignado': return $this->asignado;
             case 'resguardo': return $this->resguardo;
             default: return null;
        
         }
     }
     public function __set($atributo, $valor) {
         switch($atributo) {
            case 'id': return $this->id = (int) $valor;break;
            case 'num_inventario': return $this->num_inventario = $valor;break;
            case 'serie': return $this->serie = $valor;break;
            case 'vehiculo': return $this->vehiculo = $valor;break;
            case 'marca': return $this->marca = $valor;break;
            case 'modelo': return $this->modelo = $valor;break;
            case 'placa': return $this->placa = $valor;break;
            case 'color': return $this->color = $valor;break;
            case 'asignado': return $this->asignado = $valor;break;
            case 'resguardo': return $this->resguardo = $valor;break;

         }
     }
     public function __toString(): String {
         return "COCHE: $this->id | $this->num_inventario | $this->serie | $this->vehiculo | $this->marca | $this->modelo | 
         $this->placa | $this->color | $this->asignado | $this->resguardo";
     }
}
?>