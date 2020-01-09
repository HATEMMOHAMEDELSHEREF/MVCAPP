<?php
namespace PHPMVC;

define('DS',DIRECTORY_SEPARATOR);
require_once('..'.DS.'app'.DS.'config.php');
require_once(LIBPATH.'autoloader.php');

$brain=new Lib\Brain();
$brain->_dispatch();