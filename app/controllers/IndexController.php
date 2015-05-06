<?php
use Phalcon\Mvc\View;

class IndexController extends \Phalcon\Mvc\Controller {
	public function indexAction(){
		echo 'echo2';
		//die();
		$now = time();
		$this->view->enable();
		$this->view->start();
		$this->view->render('index', 'index');
		$this->view->finish();
		//var_export($this->di);
		//return 1;
	}
	public function smartyAction(){
		echo 'smarty';
		$this->smarty->display('smarty/test.tpl');
	}
	public function route404Action(){
		echo 404;

	}
	
}
