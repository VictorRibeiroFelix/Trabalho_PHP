<?php
namespace BLL;
include_once 'C:\xampp\htdocs\Trabalho2\DAL\Funcionario.php';
use DAL;

class Funcionario
{
    public function Select()
    {   
        $dalfunc = new \DAL\Funcionario();   
        return $dalfunc->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalfunc = new \DAL\Funcionario();   
        return $dalfunc->SelectByID($id);
    }

    public function Insert(\MODEL\Funcionario $func) {
        $dalfunc = new \DAL\Funcionario();   
        
        return $dalfunc->Insert($func);
    }


    public function Update(\MODEL\Funcionario $func) {
        $dalfunc = new \DAL\Funcionario();   
        
        return $dalfunc->Update($func);
    }


    public function Delete (int $id) {
        $dalfunc = new \DAL\Funcionario();   
        
        return $dalfunc->Delete($id);
    }


}
?>