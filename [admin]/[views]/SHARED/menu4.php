<?php
$uri = $_SERVER['REQUEST_URI'];



$menu = [
    [
        'title' => '<i class="fa fa-sitemap"></i> Разделы',
        'href' => '/'.ADMIN_URL_SIGN.'/entity/showList/pages/',
        'roles' => [Role::SUPER_ADMIN, Role::SYSTEM_ADMINISTRATOR, ],
    ],

    [
        'title' => '<i class="fa fa-sliders"></i> Настройки сайта',
        'href' => '/'.ADMIN_URL_SIGN.'/settings/',
        'roles' => [Role::SUPER_ADMIN, Role::SYSTEM_ADMINISTRATOR, ],
    ],

    [
        'title' => '<i class="fa fa-cubes"></i> Системные',
        'roles' => [Role::SUPER_ADMIN, ],
        'subs' => [
            [
                'title' => '<i class="fa fa-puzzle-piece"></i> Сущности',
                'href' => '/'.ADMIN_URL_SIGN.'/essence/',
                'roles' => [Role::SUPER_ADMIN, ],
            ],
            'DELIMITER',
            [
                'title' => '<i class="fa fa-user "></i> Администраторы',
                'href' => '/'.ADMIN_URL_SIGN.'/admin/',
                'roles' => [Role::ADMINS_MODERATOR, ],
            ],
            [
                'title' => '<i class="fa fa-users "></i> Группы админов',
                'href' => '/'.ADMIN_URL_SIGN.'/adminGroup/',
                'roles' => [Role::ADMIN_GROUPS_MODERATOR, ],
            ],
            'DELIMITER',
            [
                'title' => '<i class="fa fa-user "></i> Системная инфа',
                'href' => '/'.ADMIN_URL_SIGN.'/systemInfo/',
                'roles' => [Role::SUPER_ADMIN, ],
            ],


        ]
    ],


];





#   разбираемся кто активный, кто нет
foreach ($menu as $k=>$item)
{
    if(strpos($uri, $item['href']) === 0)
        $menu[$k]['isActive'] = true;

    #   если есть сабсы - проверяем есть ли активный
    if(count($item['subs']))
    {
        $hasActiveSub = false;
        foreach ($item['subs'] as $j=>$sub)
        {
            if(strpos($uri, $sub['href']) === 0)
            {

                $menu[$k]['subs'][$j]['isActive'] = true;
                $hasActiveSub = true;
            }
        }
        if($hasActiveSub)
            $menu[$k]['isActive'] = true;
    }
}
?>



<div class="top-menu-wrapper">
	<div id="menu">
		<ul class="primary">
            <?foreach ($menu as $item):?>

                <?if($ADMIN->hasRole($item['roles'])):?>
                    <li>
                        <a class="<?=$item['isActive'] ? 'active' : ''?>" href="<?= $item['href'] ? $item['href'] : '#'?>"><?=$item['title']?></a>
                        <?if(count($item['subs'])):?>
                            <ul>
                                <?foreach ($item['subs'] as $sub):?>
                                    <?if($sub != 'DELIMITER'):?>

                                        <?if($ADMIN->hasRole($sub['roles'])):?>
                                            <li class="<?=$sub['isActive'] ? 'active' : ''?>"><a href="<?=$sub['href']?>"><?=$sub['title']?></a></li>
                                        <?endif?>

                                    <?else:?>
                                    <li class="delimiter"><hr /></li>
                                    <?endif;?>
                                <?endforeach;?>
                            </ul>
                        <?endif?>
                    </li>
                <?endif?>

            <?endforeach;?>
        </ul>
    </div>
    <a href="#logout" class="exit2" onclick="if(confirm('Выйти из системы?')){logout(); return false;} return false;   "><img src="/<?=ADMIN_DIR?>/img/exit.png" height="24" style="vertical-align: middle; " alt="" /> Выйти</a>
</div>
