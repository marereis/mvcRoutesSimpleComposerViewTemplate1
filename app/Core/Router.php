<?php

namespace Mare\App\Core;

/**
 * classe reposnsavel pelo rotas
 */
class Router
{
    private $urlController;
    private $urlAction;
    private array $urlParams;

    /**
     * construtor da classe
     */
    public function __construct()
    {
        $this->rumUrl();
    }

    /**
     * retonar rota
     * @return Router
     */
    public function rumUrl()
    {
        $this->splitUrl();
        // uri vazia - pagina inicial
        if (!$this->urlController) {
            $page = new \Mare\App\Controllers\Controller;
            $page->index();
            return;
        }

        if (!file_exists('App\Controllers\\'.ucfirst($this->urlController).'.php')) {
            $page = new \Mare\App\Controllers\Controller;
            $page->Erro();
            return;
        }

        $controller          = 'Mare\App\Controllers\\'.ucfirst($this->urlController);
        $this->urlController = new $controller;

        if (
            method_exists($this->urlController, $this->urlAction) &&
            is_callable(array($this->urlController, $this->urlAction))
        ) {
            if (!empty($this->urlParams)) {
                call_user_func_array(array($this->urlController, $this->urlAction),
                    $this->urlParams);
                return;
            }

            $this->urlController->{$this->urlAction}();
            return;
        }
        else {
            $page = new \Mare\App\Controllers\Controller;
            $page->Erro();
            return;
        }

        $page = new \Mare\App\Controllers\Controller;
        $page->index();
    }

    /**
     * retonar url
     */
    public function splitUrl()
    {

        $uri = $_SERVER["REQUEST_URI"];

        $url = trim($uri, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode("/", $url);

        $this->urlController = isset($url[0]) ? $url[0] : "";
        $this->urlAction     = isset($url[1]) ? $url[1] : "";
        unset($url[0], $url[1]);

        $this->urlParams = array_values($url);
    }
}