<?php
class FaqController extends MainController{
	
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
//        $CONTENT->isTitleStartsWithPostfix = true;
		$CONTENT->setTitle('Вопросы-ответы');

        $_GLOBALS['activePageIds'] = [28];

		$info = Page::get(40);
        $MODEL['title'] = $info->attrs['name'];

        $MODEL['faq'] = Page::getChildren(40);


        #	крошки
        $crumbs = array();
        $crumbs[] = '<a href="/">Главная</a>';
        $crumbs[] = 'Вопросы-ответы';

        $MODEL['crumbs'] = $crumbs;



		Core::renderView('faq/index.php', $MODEL);
	}
	
	
	

	
}

?>