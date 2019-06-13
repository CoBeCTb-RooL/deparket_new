<?php
class Startup{
	
	const FRONTEND 	= 'frontend';
	const ADMIN  	= 'admin';
	
	
	function execute($type)
	{
		self::common();
		
		if($type)
		{
			if(method_exists('Startup', $type))
				call_user_func('Startup::'.$type);
			else echo 'eRRoR: uNDeFiNeD STaRTuP SCeNaRio <b>"'.$type.'"</b>.';
		}
	}
	
	
	
	
	
	########################
	#####  ФРОНТЭНД	########
	########################
	function frontend()
	{
		//global $CORE, $_GLOBALS, $_CONFIG, $_PARAMS, $_CONST;
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);


		$CONTENT->titlePostfix = $_CONFIG['SETTINGS']['title_postfix'];
		$CONTENT->titleSeparator = $_CONFIG['SETTINGS']['title_separator'];
		$CONTENT->metaKeywords = $_CONFIG['SETTINGS']['keywords'];
		$CONTENT->metaDescription = $_CONFIG['SETTINGS']['description'];
//		vd($CONTENT);
//		vd($CONTENT);
//
//		vd($a);

		$t = new Timer('Главное меню');
        $_GLOBALS['MENU']=Page::getChildren(1);
        $t->stop();

//        $_GLOBALS['activePageIds'] = [];
//        switch($CORE->controller)
//        {
//            case 'contactsController':
//                $_GLOBALS['activePageIds'][] = 29;
//                break;
//            case 'faqController':
//                $_GLOBALS['activePageIds'][] = 28;
//                break;
//            case 'catalogController':
//                $_GLOBALS['activePageIds'][] = 27;
//                break;
//        }
//        vd($_GLOBALS['MENU']);



	}
	
	
	
	
	########################
	#####  АДМИН	########
	########################
	function admin()
	{
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);

		$CONTENT->title = 'SLoNNe CMS';
		
		#	редирект к авторизации
		if($CORE->controller!='authController' && !$ADMIN )
			Slonne::redirect("auth");
		
	}
	
	
	
	
	

	
	
	########################
	#####  ОБЩИЕ	########
	########################
	function common()
	{
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);
		
		#	инициализация настроек
		$_CONFIG['SETTINGS'] = Settings::get();
		
		//echo "!";
		# 	инициализация админа
		if($_SESSION['admin'])
		{
			$ADMIN = Admin::get($_SESSION['admin']['id'], Status::code(Status::ACTIVE));
			if($ADMIN)
				$ADMIN->initGroup();
		}

        fixFILESArray();
	}
	
	
	
	
	
}