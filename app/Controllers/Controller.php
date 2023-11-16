<?php

namespace Mare\App\Controllers;

use Mare\App\Models\Model;
use Mare\App\Core\Views;

class Controller
{

    /**
     * retornar pagina home
     */
    public function index()
    {
        Views::renderTemplate("pages/home");
    }

    /**
     * retornar pagina lista
     */
    public function lista()
    {
        // var_dump($dados);
        $listas            = new Model();
        $lista             = $listas->lista();
        $_SESSION['dados'] = $lista;
        Views::renderTemplate('pages/lista', $_SESSION['dados']);
    }

    /**
     * retornar pagina erro
     */
    public function Erro()
    {
        Views::renderTemplate("pages/erro");
        $_SESSION['msg'] = 'Erro - Pagina não encotrada!';
    }

    /**
     * retornar pagina sobre
     */
    public function sobre()
    {
        Views::renderTemplate("pages/sobre",
            [
            'name' => 'informação',
            'descrisao' => "Informação sobre o projeto"
        ]);
    }

    /**
     * retonar lista id
     * @param int $dados
     */
    public function listaid($dados)
    {
        $listas            = new Model();
        $lista             = $listas->lista();
        $consulta          = array_search($dados, array_column($lista, 'id'));
        $_SESSION['lista'] = $lista;
        $_SESSION['dados'] = $consulta;
        Views::renderTemplate('pages/listaId', $_SESSION['dados']);
    }
}