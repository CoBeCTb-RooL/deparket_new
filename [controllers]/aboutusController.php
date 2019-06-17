<?php
class AboutusController extends MainController{
	
	function routifyAction()
	{
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);

		$action = 'index';

        if($id = intval($CORE->params[0]))
            $action = 'view';

		
		$CORE->action = $action;
	}



    function index()
    {
        require(GLOBAL_VARS_SCRIPT_FILE_PATH);
        Startup::execute(Startup::FRONTEND);

        $CONTENT->setTitle('О нас');

        $_GLOBALS['activePageIds'] = [26];


        $MODEL['info'] = Page::get(26);
        $MODEL['info']->initMedia();
        $MODEL['title'] = $MODEL['info']->attrs['name'];

        #	крошки
        $crumbs = array();
        $crumbs[] = '<a href="/">Главная</a>';
        $crumbs[] = $MODEL['title'];

        $MODEL['crumbs'] = $crumbs;


        Core::renderView('aboutus/aboutus.php', $MODEL);
    }



	
}

?>