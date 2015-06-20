<?php
class Nagulog {
    static function write($mensaje, $tipo="ANYONE", $log_route="logs/log.txt"){
        if($archivo = fopen($log_route, "a"))
        {
            fwrite($archivo, date("d m Y H:m:s")." - ".$tipo." - ". ($mensaje). "\n");
            fclose($archivo);
        }
    }
}