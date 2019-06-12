<?php

//$uri = $_SERVER['REQUEST_URI'];
$uri = $_SERVER['PATH_INFO'];
//vd($uri);
//vd($_SERVER);
$section = '';
$subsection = '';



/*if($uri == '/'.ADMIN_URL_SIGN.'/entity/showList/pages/')
	$section = 'razdeli';*/
if(		strpos($uri, '/'.ADMIN_URL_SIGN.'/entity/showList/pages') === 0)
    $section = 'pages';

if(		strpos($uri, '/'.ADMIN_URL_SIGN.'/entity/showList/faq') === 0)
    $section = 'faq';





elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/user') === 0)
{
	$section = 'adv';
	$subsection = 'users';
}
elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/comment') === 0)
{
	$section = 'adv';
	$subsection = 'comments';
}

elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/tools') === 0)
{
	$section = 'adv';
	$subsection = 'tools';
}




elseif($uri == '/'.ADMIN_URL_SIGN.'/essence/')
{
	$section = 'system';
	$subsection = 'essence';
}

elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/adminGroup') === 0)
{
	$section = 'system';
	$subsection = 'adminGroup';
}

elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/adminActivity') === 0 )
{
    $section = 'system';
    $subsection = 'adminActivity';
}

elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/admin') === 0 )
{
	$section = 'system';
	$subsection = 'admin';
}

elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/backup') === 0 )
{
	$section = 'system';
	$subsection = 'backup';
}

elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/settings') === 0 )
{
	$section = 'system';
	$subsection = 'settings';
}


elseif(strpos($uri, '/'.ADMIN_URL_SIGN.'/tasks') === 0 )
    $section = 'tasks';


	
	
# 	ЭТО ДОЛЖНО БЫТЬ В САМОМ КОНЦЕ!
elseif(strpos($uri, '/'.ADMIN_URL_SIGN) === 0)
	$section = 'index';	
	
	
//vd($subsection);
?>

<div class="top-menu-wrapper">
	<div id="menu">
		<ul class="primary">
			<li><a class="<?=$section=='index' ? 'active' : ''?>" href="/<?=ADMIN_URL_SIGN?>/"><i class="fa fa-pagelines"></i> Главная</a></li>
            <li><a  class="<?=$section =='pages' ? 'active' : ''?>" href="/<?=ADMIN_URL_SIGN?>/entity/showList/pages/"><i class="fa fa-sitemap"></i> Разделы</a></li>

<!--            <li><a  class="--><?//=$section =='faq' ? 'active' : ''?><!--" href="/--><?//=ADMIN_URL_SIGN?><!--/entity/showList/faq/"><i class="fa fa-question-circle" aria-hidden="true"></i> Вопрос-ответ</a></li>-->

			
			
			<?php 
			if($ADMIN->hasRole(Role::SUPER_ADMIN | Role::SYSTEM_ADMINISTRATOR | Role::ADMIN_GROUPS_MODERATOR | Role::ADMINS_MODERATOR) )
			{?>
			<li>
				<a class="<?=$section=='system' ? 'active' : ''?>" href="#"><i class="fa fa-cubes"></i> Системные</a>
				<ul>



					<!-- <li><a class="" href="/admin/module/"><i class="fa fa-cogs"></i> Модули</a></li> -->
                    <?php
                    if($ADMIN->hasRole(Role::SUPER_ADMIN ))
                    {?>
                        <li class="<?=$subsection=='essence' ? 'active' : ''?>"><a href="/<?=ADMIN_URL_SIGN?>/essence/"><i class="fa fa-puzzle-piece"></i> Сущности</a></li>
                        <li class="delimiter"><hr /></li>
                        <?php
                    }?>
					
					
					
					<?php 
					if($ADMIN->hasRole(Role::ADMINS_MODERATOR ))
					{?>
					<li class="<?=$subsection=='admin' ? 'active' : ''?>"><a href="/<?=ADMIN_URL_SIGN?>/admin/"><i class="fa fa-user "></i> Администраторы</a></li>
					<?php 
					}?>

                    <?php
                    if($ADMIN->hasRole(Role::ADMIN_GROUPS_MODERATOR))
                    {?>
                        <li class="<?=$subsection=='adminGroup' ? 'active' : ''?>"><a href="/<?=ADMIN_URL_SIGN?>/adminGroup/"><i class="fa fa-users "></i> Группы админов</a></li>
                        <?php
                    }?>
                    <li class="delimiter"><hr /></li>
					
					<?php 
					if($ADMIN->hasRole(Role::SYSTEM_ADMINISTRATOR ))
					{?>
					<li class="<?=$subsection=='settings' ? 'active' : ''?>" ><a href="/<?=ADMIN_URL_SIGN?>/settings/"><i class="fa fa-sliders"></i> Настройки сайта</a></li>
					<li class="<?=$subsection=='backup' ? 'active' : ''?>"><a href="/<?=ADMIN_URL_SIGN?>/backup/"><i class="fa fa-database"></i> Бэкап базы</a></li>
                    <li class="delimiter"><hr /></li>
					<?php 
					}?>


                    <?php
                    if($ADMIN->hasRole(Role::SYSTEM_ADMINISTRATOR ) || $ADMIN->hasRole(Role::ADMINS_MODERATOR ))
                    {?>

                        <li class="<?=$subsection=='adminActivity' ? 'active' : ''?>"><a href="/<?=ADMIN_URL_SIGN?>/adminActivity/"><i class="fa fa-user "></i> Активность админов</a></li>
                        <?php
                    }?>

                    <? if($ADMIN->hasRole(Role::SYSTEM_ADMINISTRATOR ) ):?>
                        <li class="<?=$subsection=='systemInfo' ? 'active' : ''?>"><a href="/<?=ADMIN_URL_SIGN?>/systemInfo/"><i class="fa fa-user "></i> Системная инфа</a></li>
                    <?endif?>


				</ul>
			</li>
			<?php 
			}?>
			
			
			

			
			
			
		</ul>
	</div>
	<a href="#logout" class="exit2" onclick="if(confirm('Выйти из системы?')){logout(); return false;} else{return false} "><img src="/<?=ADMIN_DIR?>/img/exit.png" height="24" style="vertical-align: middle; " alt="" /><!-- <i class="fa fa-road"></i> -->Выйти</a>
</div>

