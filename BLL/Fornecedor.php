<?php
namespace BLL;
include_once 'C:\xampp\htdocs\Trabalho2\DAL\Fornecedor.php';
use DAL;

class Fornecedor
{
    public function Select()
    {   
        $dalforne = new \DAL\Fornecedor();   
        return $dalforne->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalforne = new \DAL\Fornecedor();   
        return $dalforne->SelectByID($id);
    }

    public function Insert(\MODEL\Fornecedor $forne) {
        $dalforne = new \DAL\Fornecedor();   
        
        return $dalforne->Insert($forne);
    }


    public function Update(\MODEL\Fornecedor $forne) {
        $dalforne = new \DAL\Fornecedor();   
        
        return $dalforne->Update($forne);
    }


    public function Delete (int $id) {
        $dalforne = new \DAL\Fornecedor();   
        
        return $dalforne->Delete($id);
    }


}
?>