<?php

use App\Controller\PessoaController;
use App\Controller\CategoriaProdutoController;
use App\Controller\ProdutoController;
use App\Controller\FuncionarioController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{
    //Pessoa
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    //Categoria Produto
    case '/categoriaproduto':
        CategoriaProdutoController::index();
    break;

    case '/categoriaproduto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoriaproduto/form/save':
        CategoriaProdutoController::save();
    break;

    case '/categoriaproduto/delete':
        CategoriaProdutoController::delete();
    break;

    //Produto
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/form/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    //Funcionário
    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/form/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;


    default:
        include 'View/inicio.php';
    break;
}