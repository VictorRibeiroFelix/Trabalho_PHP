<?php
namespace BLL;
include_once 'C:\xampp\htdocs\Trabalho2\DAL\Produto.php';
use DAL;

class Produto
{


    public function Select()
    {   
        $dalprod = new \DAL\Produto(); // Passa a conexão PDO
        return $dalprod->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalprod = new \DAL\Produto(); // Passa a conexão PDO
        return $dalprod->SelectByID($id);
    }

    public function Insert(\MODEL\Produto $prod) {
        $dalprod = new \DAL\Produto(); // Passa a conexão PDO
        return $dalprod->Insert($prod);
    }

    public function Update(\MODEL\Produto $prod) {
        $dalprod = new \DAL\Produto(); 
        return $dalprod->Update($prod);
    }

    public function Delete (int $id) {
        $dalprod = new \DAL\Produto();
        return $dalprod->Delete($id);
    }
}
?>