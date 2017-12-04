<?php
require_once 'config/config.php';
require_once 'src/Database.php';
require_once 'src/Template.php';

define('BASE_URL', __DIR__);

spl_autoload_register(function($class) {
    require_once (file_exists(BASE_URL.'/controller/'.$class.'.php'))? BASE_URL.'/controller/'.$class.'.php' : BASE_URL.'/model/'.$class.'.php';
});

//  TODO
//  Criar sistemas de rodas para chamar:
//  controller/metodo
//  controller/metodo/parametros<array>

$data = 'test';
$user = new UsuarioController();
$user->listar();
