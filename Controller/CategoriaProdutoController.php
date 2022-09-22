<?php

namespace App\Controller;

use App\Model\CategoriaProdutoModel;


class CategoriaProdutoController extends Controller
{
    
    public static function index() 
    {
        $model = new CategoriaProdutoModel();
        $model->getAllRows();

        parent::render('CategoriaProduto/CategoriaProdutoLista', $model);
    }

   
    public static function form()
    {
        $model = new CategoriaProdutoModel();

        if (isset($_GET['id']))
            $model = $model->getById((int)$_GET['id']);

        parent::render('CategoriaProduto/CategoriaProdutoForm', $model);
    }

    
    public static function save() 
    {
        $model = new CategoriaProdutoModel();
        
        $model->id = $_POST['id'];
        $model->categoria = $_POST['categoria'];

        $model->save(); 

        header("Location: /categoriaproduto"); 
    }

    public static function delete()
    {
        $model = new CategoriaProdutoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /categoriaproduto"); 
    }
}