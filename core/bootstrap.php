<?php
use App\Core\App;
require 'core/functions.php';



App::bind('config', require 'configs.php');


App::bind('database', new QueryBuider(
	Connection::make(App::get('config')['database'])
	)
);

function view($name, $data = []){	
	extract($data);

	return require "app/views/{$name}.view.php";
}

function redirect($path){
	header("Location: /{$path}");
}