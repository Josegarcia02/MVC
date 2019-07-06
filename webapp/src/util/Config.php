<?php

namespace Utel\Util;

class Config {

    public static function getBaseDir():String{
        $dir = \dirname(__DIR__,2);
        return $dir;
    }
    public static function getView(String $archivo): String{
        return Config::getBaseDir() . "/src/views/$archivo";
    }
    public static function getLogger():Logger{
        $log = new Logger ('CONTROLinventario');
        $logFile = Config::getBaseDir().'/logs/error.log';
        $log->pushHandler(new StreamHandler($logFile, Logger::DEBUG));
        return $slog;
    }
    public static function camposVacios(...$datos):bool{
        $resultado = false;
        foreach ($datos as $campo){
            $resultado = empty ($campo) or $resultado;
        }
        return $resultado;
    }
}
?>

 