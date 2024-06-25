<?php
namespace BLL;
include_once 'C:\xampp\htdocs\Trabalho2\DAL\Cliente.php';
use DAL;

class Cliente
{
    public function Select()
    {   
        $dalclie = new \DAL\Cliente();   
        return $dalclie->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalclie = new \DAL\Cliente();   
        return $dalclie->SelectByID($id);
    }

    public function Insert(\MODEL\Cliente $cliente) {
        $dalclie = new \DAL\Cliente();   
        
        return $dalclie->Insert($cliente);
    }


    public function Update(\MODEL\Cliente $cliente) {
        $dalclie = new \DAL\Cliente();   
        
        return $dalclie->Update($cliente);
    }


    public function Delete (int $id) {
        $dalclie = new \DAL\Cliente();   
        
        return $dalclie->Delete($id);
    }


}
?>