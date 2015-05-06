<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('_ROOT', realpath(dirname(__FILE__).'/../'));
require(_ROOT.'/config/env.config.php');
require(_ROOT.'/config/common/app.config.php');
require(_CONFIG_PATH.'db.config.php');


$loader = new \Phalcon\Loader();

$loader->registerDirs(
    array(
        _CONTROLLER_PATH,
        _MODEL_PATH,
        _VENDOR_PATH,
    )
)->register();


$di = new \Phalcon\DI\FactoryDefault();

$di['router'] = function(){
	$router = new \Phalcon\Mvc\Router();
	include(_ROUTER_FILE);
	return $router;
};



$di['smarty'] = function(){
	include(_VENDOR_PATH.'/Smarty/Smarty/Smarty.class.php');
	require(_ROOT.'/config/common/smarty.config.php');
	$smarty = new Smarty();
	$smarty->cache_dir = _SMARTY_CACHE_DIR;
	$smarty->compile_dir = _SMARTY_COMPILE_DIR;
	$smarty->config_dir = _SMARTY_CONFIG_DIR;
	$smarty->left_delimiter = _SMARTY_LEFT_DELIMITER;
	$smarty->right_delimiter = _SMARTY_RIGHT_DELIMITER;
	$smarty->template_dir = _SMARTY_TEMPLATE_DIR;
	$smarty->compile_check = _SMARTY_COMPILE_CHECK;
	$smarty->debugging = _SMARTY_DEBUGGING;
	$smarty->caching = _SMARTY_CACHEING;
	$smarty->addPluginsDir(_SMARTY_PLUGIN_DIR);
	return $smarty;
};




$di['view'] = function(){
	$view = new \Phalcon\Mvc\View();
    $view->setViewsDir(_VIEW_PATH);
    $view->disable();
	//$view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);
	return $view;
};

$di['request'] = function(){
	$request = new \Phalcon\Http\Request();
	return $request;
};




$di['db'] = function(){
	return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
		"host" => "localhost",
		"username" => "root",
		"password" => "",
		"dbname" => "test"
	));
};
//Registering the Models-Metadata
$di['modelsMetadata'] = function() {
	return new \Phalcon\Mvc\Model\Metadata\Memory();
};

//try{
	if(empty($_GET['_url'])) {
		$_GET['_url'] = $_SERVER['REQUEST_URI'];
	}

	$application = new \Phalcon\Mvc\Application($di);
	echo $application->handle()->getContent();
	//$application = new \Phalcon\Mvc\Micro();
	//$application->handle();

//}catch(\Exception $e){

//    echo $e->getMessage();

//}

