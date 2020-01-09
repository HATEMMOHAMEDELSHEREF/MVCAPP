<?php
namespace PHPMVC\Controllers;

class EmployeeController extends AbstractController{
    public function defaultAction()
    {
    // echo 'employee default action';   
    $this->view();
    }
    public function deleteAction(){
        //echo 'employee delete action';
        $this->view();
    }
    public function editAction(){
       // echo 'employee edit action'; 
       $this->view();
    }
    public function showallAction(){
        //echo 'employee showall action';
        $this->view();
    }
}