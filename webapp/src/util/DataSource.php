<?php 
namespace Utel\Util;

use \PDO;

class DataSource{
    public static function getConnection() {
        try {
            $conexion = new PDO ('mysql:host=localhost;dbname=luxe', 'root', '12345');
            return $conexion;
        }
        catch(PDOException $e) {
            Config::getLogger()->error($e->getMessage());
        }
    }   
}
?>