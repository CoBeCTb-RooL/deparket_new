<?php
class IndexController extends MainController{
	
	function routifyAction()
	{
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);

		$action = 'index';
//		if($_SERVER['REQUEST_URI'] == '/' && $_CONFIG['ZAGLUSHKA_INDEX'])
//			$action = 'zaglushka';
		
		$CORE->action = $action;
	}
	
	
	
	function index()
	{
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);
		Startup::execute(Startup::FRONTEND);
		
		//$CONTENT->setTitle('ПаНКи');
        $CONTENT->isTitleStartsWithPostfix = true;
		$CONTENT->setTitle('Главная');

		$MODEL['info'] = Page::get(24);

        $MODEL['slides'] = Page::getChildren(35);

        $MODEL['catalog'] = Page::getChildren(27);

        $MODEL['reviews'] = Page::getChildren(45);
		

		Core::renderView('index/index.php', $MODEL);
	}
	
	
	
	function zaglushka()
	{
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);
		//Startup::execute(Startup::FRONTEND);
		
		$CORE->setLayout('zaglushka.php');
		
	}
	
}

?>