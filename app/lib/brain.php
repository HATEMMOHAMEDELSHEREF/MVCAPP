<?php
namespace PHPMVC\Lib;
class Brain{

    private $_controller='index';
    private $_action='default';
    private $_params=null;
    const NOTFOUNDACTION='notfoundAction';
    const NOTFOUNDCONTROLLER='PHPMVC\Controllers\NotFoundController';
    public function __construct()
    {
       $this->_parseUrl();
    }
    public function _parseUrl(){
        $url=explode('/',trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/'),3);
       if(isset($url[0]) && !empty($url[0])){
        $this->_controller=$url[0];
       }
       if(isset($url[1]) && !empty($url[1])){
        $this->_action=$url[1];
       }
       if(isset($url[2]) && !empty($url[2])){
        $this->_params=explode('/',$url[2]);
       }
       
    }
    public function _dispatch(){
        $controllerClassName='PHPMVC\Controllers\\'.ucfirst($this->_controller).'Controller';
        $actionName=$this->_action.'Action';
        if(!class_exists($controllerClassName)){
            $controllerClassName=self::NOTFOUNDCONTROLLER;
            $actionName=self::NOTFOUNDACTION;
            $this->_action=$actionName;
        }
            $objectFromController=new $controllerClassName();
            if(!method_exists($controllerClassName,$actionName)){
                $actionName=self::NOTFOUNDACTION;
                $this->_action=$actionName;
            }
                $objectFromController->setController($this->_controller);
                $objectFromController->setAction($this->_action);
                $objectFromController->setParameteres($this->_params);
            
            $objectFromController->$actionName();
        
       
      
    }
}