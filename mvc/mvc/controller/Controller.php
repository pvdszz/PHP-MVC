<?php
require_once "./mvc/model/Model.php";

class Controller {
    public $model;
    public function __construct()
        {
            $this->model = new Model();

        }
    public function check_status()
    {   
        $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
        if($reslt == 'login')
        {
            include './mvc/view/Afterlogin.php';
        }
        else
        {
            include './mvc/view/adds_entry.php';
        }
        $get = $this->model("Addsmodel");
        $this->view ([
            "get" =>$get->getdata()
        ]);
        
    }
}


    
?> 
