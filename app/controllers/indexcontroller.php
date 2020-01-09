<?php
namespace PHPMVC\Controllers;

class IndexController extends AbstractController{
    
    public function defaultAction(){
       // echo 'index default action';
       $this->view();
    }
    public function deleteAction(){
        //echo 'index delete action';
        $this->view();
    }
    public function editAction(){
        //echo 'index edit action';
        $this->view();
    }
    public function showallAction(){
       // echo 'index showall action';
       $this->view();
    }
    public function addAction(){
        // echo 'index showall action';
        $this->view();
     }
}