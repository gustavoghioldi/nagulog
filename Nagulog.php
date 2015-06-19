<?php
class Nagulog {

    static function write($mensaje=null, $tipo=null){
        if($archivo = fopen('log.txt', "a"))
        {
            fwrite($archivo, date("d m Y H:m:s")." - ".$tipo." - ". ($mensaje). "\n");
            fclose($archivo);
        }
    }
}