<?php
namespace PHPMVC\Lib;
class Autoloader{

    public static function Autoload($className){
        $className=str_replace('PHPMVC','',$className);
        $className=str_replace('\\','/',$className);
        $className=$className.'.php';
        $className=strtolower($className);
         if(file_exists(APPPATH.$className)){
            require_once(APPPATH.$className);
        }
    }
}
spl_autoload_register(__NAMESPACE__.'\Autoloader::Autoload');