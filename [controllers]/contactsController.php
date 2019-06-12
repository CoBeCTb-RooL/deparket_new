<?php
class ContactsController extends MainController{
	
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
		$CONTENT->setTitle('Контакты');

//		$info = Page::get(40);
//        $MODEL['title'] = $info->attrs['name'];
//
//        $MODEL['faq'] = Page::getChildren(40);


        $MODEL['title'] = 'Контакты';

        #	крошки
        $crumbs = array();
        $crumbs[] = '<a href="/">Главная</a>';
        $crumbs[] = 'Контакты';

        $MODEL['crumbs'] = $crumbs;



		Core::renderView('contacts/contacts.php', $MODEL);
	}
	
	
	

	
}

?>