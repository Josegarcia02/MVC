<?php

namespace Utel\Util;

class Inventario {

    private $id;
    private $id_vehiculo;
    private $tcirculacion, $poliza_seguro;
    private $num_inventario, $vehiculo_tipo, $color;
    private $accesorios, $carroceria, $observaciones;


    public const SQL_SELECT_INVENTARIO = "SELECT * FROM inventario";
    public const SQL_SELECT_INVENTARIO_BY_ID = "SELECT * FROM inventario WHERE id=?";
    public const SQL_UPDATE_INVENTARIO = "UPDATE inventario SET tcirculacion=?, poliza_seguro=?, num_inventario=?,vehiculo_tipo=?, color=?, accesorios=?, carroceria=?, observaciones=? WHERE id=?";
    public const SQL_DELETE_INVENTARIO = "DELETE FROM inventario WHERE id=?";
    public const SQL_INSERT_INVENTARIO = "INSERT INTO inventario (id_vehiculo, tcirculacion, poliza_seguro, num_inventario, vehiculo_tipo, color, accesorios, carroceria, observaciones) VALUES(?,?,?,?,?,?,?,?,?)";
   

    public function __get($nombre) {
        switch($nombre) {
            case 'id': return $this->id;
            case 'id_vehiculo': return $this->id_vehiculo;
            case 'tcirculacion': return $this->tcirculacion;
            case 'poliza_seguro': return $this->poliza_seguro;
            case 'num_inventario': return $this->num_inventario;
            case 'vehiculo_tipo': return $this->vehiculo_tipo;
            case 'color': return $this->color;
            case 'accesorios': return $this->accesorios;
            case 'carroceria': return $this->carroceria;
            case 'observaciones': return $this->observaciones;
            default: return null;
        }
    }

    public function __set($nombre, $valor) {
        switch($nombre) {
            case 'id': $this->id = (int) $valor; break;
            case 'id_vehiculo': $this->id_vehiculo = (int) $valor; break;
            case 'tcirculacion': $this->tcirculacion= $valor; break;
            case 'poliza_seguro': $this->poliza_seguro = $valor; break;
            case 'num_inventario': $this->num_inventario = $valor; break;
            case 'vehiculo_tipo': $this->vehiculo_tipo = $valor; break;
            case 'color': $this->color = $valor; break;
            case 'accesorios': $this->accesorios = $valor; break;
            case 'carroceria': $this->carroceria = $valor; break;
            case 'observaciones': $this->observaciones = $valor; break;
        }
    }

    public function __toString(): String {
        return "INVENTARIO: $this->id | $this->nombre $this->apellidos | $this->email";
    }

}
?>
