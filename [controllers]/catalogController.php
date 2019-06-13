<?php
class CatalogController extends MainController{
	
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

        //$CONTENT->setTitle('ПаНКи');
        $CONTENT->setTitle('Каталог');

        $_GLOBALS['activePageIds'] = [27];

        $info = Page::get(27);  //  каталог
        $MODEL['title'] = $info->attrs['name'];

        $MODEL['catInfo'] = Page::get(27);
        $MODEL['list'] = Page::getChildren(27);

        #	крошки
        $crumbs = array();
        $crumbs[] = '<a href="/">Главная</a>';
        $crumbs[] = $MODEL['title'];

        $MODEL['crumbs'] = $crumbs;


        Core::renderView('catalog/index.php', $MODEL);
    }



    function view()
    {
        require(GLOBAL_VARS_SCRIPT_FILE_PATH);
        Startup::execute(Startup::FRONTEND);

        $_GLOBALS['activePageIds'] = [27];

        $MODEL['item'] = Page::get($CORE->params[0]);
        $MODEL['item']->initMedia();

        $CONTENT->setTitle($MODEL['item']->attrs['name']);

        $CONTENT->metaKeywords = $MODEL['item']->attrs['meta_keywords'] ? $MODEL['item']->attrs['meta_keywords'] : $CONTENT->metaKeywords;
        $CONTENT->metaDescription= $MODEL['item']->attrs['meta_description'] ? $MODEL['item']->attrs['meta_description'] : $CONTENT->metaDescription;


        $MODEL['title'] = $MODEL['item']->attrs['name'];
        #	крошки
        $crumbs = array();
        $crumbs[] = '<a href="/">Главная</a>';
        $crumbs[] = '<a href="/catalog/">Каталог</a>';
        $crumbs[] = $MODEL['item']->attrs['name'];

        $MODEL['crumbs'] = $crumbs;


        Core::renderView('catalog/view.php', $MODEL);
    }
	
	

	
}

?>