<?php
namespace PHPMVC\Controllers;

use PHPMVC\Lib\Brain;

class AbstractController{

    protected $controllerName;
    protected $actionName;
    protected $parameteres;

    public function setController($controller){
        $this->controllerName=$controller;
    }
    public function setAction($action){
        $this->actionName=$action;
    }
    public function setParameteres($params){
        $this->parameteres=$params;
    }
    public function notfoundAction(){
        $this->view();
    }
    public function view()
    {
        // echo '<br>'.$this->controllerName.'</br>';
        // echo '<br>'.$this->actionName.'</br>';
        
        if($this->actionName===Brain::NOTFOUNDACTION){
            $path=VIEWPATH.'notfound'.DS.'notfound.view.php';
            require_once $path;
        }else{
            $path=VIEWPATH.$this->controllerName.DS.$this->actionName.'.view.php';
            if(!file_exists($path)){
            $path=VIEWPATH.'notfound'.DS.'noview.view.php';
            }
            require_once $path;
        }
    }
}