<?php

class gradiadsenseTaskModuleFrontController extends ModuleFrontController {
	
	public function __construct()
	{
		parent::__construct();
		$this -> context = Context::getContext();
	}


	public function initcontent()
	{
		parent::initContent();
		
		$this -> setTemplate('module:gradiadsense/views/templates/front/task.tpl');
		
	}

	public function setMedia()
	{
		parent::setMedia();
		$this->addjQuery();
	}

}



?>