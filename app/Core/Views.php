<?php

namespace Mare\App\Core;

/**
 * classe responsavel pela views e templates.
 */
class Views
{

    /**
     * renderizar o template
     * @param string $view
     * @param array $dadosModel
     * @return Views
     */
    public static function renderTemplate($view, $dadosModel = [])
    {
        $file = require 'resources/views/theme/_theme.php';

        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * rendelizar views no template
     * @param string $view
     * @param array $dadosModel
     * @return views
     */
    public static function renderVeiwTemplate($view, $dadosModel = [])
    {
        extract($dadosModel);
        $file = require 'resources/views/'.$view.'.php';

        return file_exists($file) ? file_get_contents($file) : '';
    }
}