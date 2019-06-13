<?php
class ContactsController extends MainController{
	
	function routifyAction()
	{
		require(GLOBAL_VARS_SCRIPT_FILE_PATH);

		$action = 'index';
        if($CORE->urlParts[1] == 'formSubmit')
            $action = 'formSubmit';
		
		$CORE->action = $action;
	}



    function index()
    {
        require(GLOBAL_VARS_SCRIPT_FILE_PATH);
        Startup::execute(Startup::FRONTEND);


        $CONTENT->setTitle('Контакты');


        $MODEL['title'] = 'Контакты';

        $MODEL['phones'] = explode(',', Settings::val('contactsPhone'));

//        vd($_GLOBALS['activePageIds']);
        $_GLOBALS['activePageIds'] = [29];

        #	крошки
        $crumbs = array();
        $crumbs[] = '<a href="/">Главная</a>';
        $crumbs[] = 'Контакты';

        $MODEL['crumbs'] = $crumbs;



        Core::renderView('contacts/contacts.php', $MODEL);
    }




    function formSubmit()
    {
        require(GLOBAL_VARS_SCRIPT_FILE_PATH);
        Startup::execute(Startup::FRONTEND);

        $CORE->setLayout(null);
        vd($_REQUEST);

        $errors = [];
        $requiredFields = [
            'name' => 'Укажите Ваше имя.',
            'phone' => 'Укажите Ваш контактный телефон',
            'message' => 'Напишите Ваше сообщение',
//            'email' => 'Напишите Ваш email',
        ];
        foreach ($requiredFields as $fieldCode=>$errorMsg)
            if(!trim($_REQUEST[$fieldCode]))
                $errors[] = new Error($errorMsg, $fieldCode);

        if(!count($errors))
        {
            $m = new Mail();
            $m->to = Settings::val('contactsEmail');
            $m->from = Settings::val('robotEmail');
            $m->subject = 'Сообщение с сайта '.Settings::val('title_postfix').' ';
            $m->msg = Mail::сontactFormMsg($_REQUEST);
//            vd($m);
            $m->send();
        }

        $ret = [
            'errors'=>$errors,
        ];

        vd($ret);

        echo '<script>window.top.contactsForm.submitComplete('.json_encode($ret).')</script>';

    }





}

?>