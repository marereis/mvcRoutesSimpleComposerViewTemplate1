<?php

/**
 * Index php
 */
ob_start();

session_start();
/**
 * Esse o e chave de todo funciomanto do autiload do composer
 */
require_once __DIR__ . '/vendor/autoload.php';

use Mare\App\Core\Router;

/**
 * controle de rotar simples
 */
$routers = new Router();


ob_end_flush();
