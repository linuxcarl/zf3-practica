<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CatalogoController extends AbstractActionController{

    public function listaAction()
    {
        return new ViewModel([
            "productos" => [
                "Macbook", 
                'Pc',
                'Xbox',
                'IMac'
            ],
            "titulo" => "Lista de inventarios"
        ]);
    }
}