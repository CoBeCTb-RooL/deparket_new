<?php 
$e = $MODEL['entity'];
$essence = $MODEL['essence'];
$type = $MODEL['type'];
//vd($MODEL);
//vd($e);
//vd($type);
//vd($essence);

#	меню в шапке может относиться только к блоку (или элементу только в случае jointFields)
if(!$essence->jointFields)
	$type=Entity2::TYPE_BLOCKS;
?>


<style>
.entity-menu.linear .edit{display: none !important; }
.entity-menu.linear .add-block{display: none !important;}
.entity-menu.linear .blocks-list{display: none !important;}


</style>




    <h1 style="display: inline-block; vertical-align: middle; font-size: 2.0em; ">
        <?if(!$essence->linear):?>

            <span class="title" style="vertical-align: middle; "><?=$e->attrs['name']?></span>
            <sup class="gray" style="vertical-align: middle; "><b><?= $e->id?></b> </sup>
        <?else:?>
            <?=$_GLOBALS['CURRENT_MODULE']->icon?> <?=$essence->name?>
        <?endif;?>
    </h1>

    
    

        <!--<a class="button blue chunky1 lozenge1 light1 xs" href="#edit" onclick="Slonne.Entities.edit('<?=$essence->code ?>', '<?=$e->id?>', '<?=$type?>', Slonne.Entities.LANG); return false;">ред. </a>-->


<!--<div id="container">

    <h4>Default Button style</h4>

    <p>

        <a href="#" class="button">Button</a>

        <a href="#" class="button heavy">Big Button</a>

        <a href="#" class="button light">Small Button</a>

        <a href="#" class="button lozenge">Rounded Button</a>

        <a href="#" class="button scale">Animated Button</a>

        <a href="#" class="button chunky">Chunky Button</a>

    </p>

    <h4>Red Buttons</h4>

    <p>

        <a href="#" class="button red">Button</a>

        <a href="#" class="button red heavy">Big Button</a>

        <a href="#" class="button red light">Small Button</a>

        <a href="#" class="button red lozenge">Rounded Button</a>

        <a href="#" class="button red scale">Animated Button</a>

        <a href="#" class="button red chunky">Chunky Button</a>


        <a href="#" class="button red-pastel">Button</a>

        <a href="#" class="button red-pastel heavy">Big Button</a>

        <a href="#" class="button red-pastel light">Small Button</a>

        <a href="#" class="button red-pastel lozenge">Rounded Button</a>

        <a href="#" class="button red-pastel scale">Animated Button</a>

        <a href="#" class="button red-pastel chunky">Chunky Button</a>

    </p>


    <h4>Orange Buttons</h4>

    <p>

        <a href="#" class="button orange">Button</a>

        <a href="#" class="button orange heavy">Big Button</a>

        <a href="#" class="button orange light">Small Button</a>

        <a href="#" class="button orange lozenge">Rounded Button</a>

        <a href="#" class="button orange scale">Animated Button</a>

        <a href="#" class="button orange chunky">Chunky Button</a>

        <a href="#" class="button orange-pastel">Button</a>

        <a href="#" class="button orange-pastel heavy">Big Button</a>

        <a href="#" class="button orange-pastel light">Small Button</a>

        <a href="#" class="button orange-pastel lozenge">Rounded Button</a>

        <a href="#" class="button orange-pastel scale">Animated Button</a>

        <a href="#" class="button orange-pastel chunky">Chunky Button</a>

    </p>

    <h4>Yellow Buttons</h4>

    <p>

        <a href="#" class="button yellow">Button</a>

        <a href="#" class="button yellow heavy">Big Button</a>

        <a href="#" class="button yellow light">Small Button</a>

        <a href="#" class="button yellow lozenge">Rounded Button</a>

        <a href="#" class="button yellow scale">Animated Button</a>

        <a href="#" class="button yellow chunky">Chunky Button</a>

        <a href="#" class="button yellow-pastel">Button</a>

        <a href="#" class="button yellow-pastel heavy">Big Button</a>

        <a href="#" class="button yellow-pastel light">Small Button</a>

        <a href="#" class="button yellow-pastel lozenge">Rounded Button</a>

        <a href="#" class="button yellow-pastel scale">Animated Button</a>

        <a href="#" class="button yellow-pastel chunky">Chunky Button</a>

    </p>

    <h4>Green Buttons</h4>

    <p>

        <a href="#" class="button green">Button</a>

        <a href="#" class="button green heavy">Big Button</a>

        <a href="#" class="button green light">Small Button</a>

        <a href="#" class="button green lozenge">Rounded Button</a>

        <a href="#" class="button green scale">Animated Button</a>

        <a href="#" class="button green chunky">Chunky Button</a>

        <a href="#" class="button green-pastel">Button</a>

        <a href="#" class="button green-pastel heavy">Big Button</a>

        <a href="#" class="button green-pastel light">Small Button</a>

        <a href="#" class="button green-pastel lozenge">Rounded Button</a>

        <a href="#" class="button green-pastel scale">Animated Button</a>

        <a href="#" class="button green-pastel chunky">Chunky Button</a>

    </p>

    <h4>Blue Buttons</h4>

    <p>

        <a href="#" class="button blue">Button</a>

        <a href="#" class="button blue heavy">Big Button</a>

        <a href="#" class="button blue light">Small Button</a>

        <a href="#" class="button blue lozenge">Rounded Button</a>

        <a href="#" class="button blue scale">Animated Button</a>

        <a href="#" class="button blue chunky">Chunky Button</a>

        <a href="#" class="button blue-pastel">Button</a>

        <a href="#" class="button blue-pastel heavy">Big Button</a>

        <a href="#" class="button blue-pastel light">Small Button</a>

        <a href="#" class="button blue-pastel lozenge">Rounded Button</a>

        <a href="#" class="button blue-pastel scale">Animated Button</a>

        <a href="#" class="button blue-pastel chunky">Chunky Button</a>

    </p>

    <h4>Indigo Buttons</h4>

    <p>

        <a href="#" class="button indigo">Button</a>

        <a href="#" class="button indigo heavy">Big Button</a>

        <a href="#" class="button indigo light">Small Button</a>

        <a href="#" class="button indigo lozenge">Rounded Button</a>

        <a href="#" class="button indigo scale">Animated Button</a>

        <a href="#" class="button indigo chunky">Chunky Button</a>

        <a href="#" class="button indigo-pastel">Button</a>

        <a href="#" class="button indigo-pastel heavy">Big Button</a>

        <a href="#" class="button indigo-pastel light">Small Button</a>

        <a href="#" class="button indigo-pastel lozenge">Rounded Button</a>

        <a href="#" class="button indigo-pastel scale">Animated Button</a>

        <a href="#" class="button indigo-pastel chunky">Chunky Button</a>

    </p>

    <h4>Violet Buttons</h4>

    <p>

        <a href="#" class="button violet">Button</a>

        <a href="#" class="button violet heavy">Big Button</a>

        <a href="#" class="button violet light">Small Button</a>

        <a href="#" class="button violet lozenge">Rounded Button</a>

        <a href="#" class="button violet scale">Animated Button</a>

        <a href="#" class="button violet chunky">Chunky Button</a>

        <a href="#" class="button violet-pastel">Button</a>

        <a href="#" class="button violet-pastel heavy">Big Button</a>

        <a href="#" class="button violet-pastel light">Small Button</a>

        <a href="#" class="button violet-pastel lozenge">Rounded Button</a>

        <a href="#" class="button violet-pastel scale">Animated Button</a>

        <a href="#" class="button violet-pastel chunky">Chunky Button</a>

    </p>

    <h4>Black Buttons</h4>

    <p>

        <a href="#" class="button black">Button</a>

        <a href="#" class="button black heavy">Big Button</a>

        <a href="#" class="button black light">Small Button</a>

        <a href="#" class="button black lozenge">Rounded Button</a>

        <a href="#" class="button black scale">Animated Button</a>

        <a href="#" class="button black chunky">Chunky Button</a>

    </p>



    <h4>Buttons with icons</h4>

    <p class="icon-buttons">

        <a href="" class="button icon back"><span>Back</span></a>

        <a href="#" class="button icon forward"><span>Forward</span></a>

        <a href="#" class="button icon download green"><span>Download</span></a>

        <a href="#" class="button icon upload"><span>Upload</span></a>

        <a href="#" class="button icon edit"><span>Edit</span></a>

        <a href="#" class="button icon rss orange"><span>Subscribe</span></a>

        <a href="#" class="button icon delete red"><span>Delete</span></a>

        <a href="#" class="button icon login yellow"><span>Login</span></a>

        <a href="#" class="button icon love violet"><span>Love</span></a>

        <a href="#" class="button icon tag"><span>Tag</span></a>

        <a href="#" class="button icon refresh yellow"><span>Refresh</span></a>

        <a href="#" class="button icon lock red"><span>Lock</span></a>

        <a href="#" class="button icon unlock green-pastel"><span>Unlock</span></a>

        <a href="#" class="button icon search blue-pastel"><span>Search</span></a>

        <a href="#" class="button icon add green-pastel"><span>Add</span></a>

        <a href="#" class="button icon confirm green"><span>Confirm</span></a>

        <a href="#" class="button icon time"><span>Choose a time</span></a>

        <a href="#" class="button icon trash red-pastel"><span>Trash</span></a>

        <a href="#" class="button icon email blue"><span>Email</span></a>

        <a href="#" class="button icon comment orange-pastel"><span>Comments</span></a>

        <a href="#" class="button icon bookmark yellow-pastel"><span>Bookmark</span></a>

        <a href="#top" class="button icon top green"><span>Back to the top</span></a>

    </p>


</div> -->



<!--БУТСТРЕПОВСКИЕ КОНПЫЧКИ-->
<!--<a class="edit btn btn-warning btn3d1 xs " style=" color: #fff;  " href="#edit" onclick="Slonne.Entities.edit('<?=$essence->code ?>', '<?=$e->id?>', '<?=$type?>', Slonne.Entities.LANG); return false;">редактировать</a>

<?if(!$essence->jointFields && !$essence->linear):?>
    <a class="add-block" href="#new_sub_block" onclick="Slonne.Entities.edit('<?=$essence->code ?>', 0, '<?=Entity2::TYPE_BLOCKS?>', Slonne.Entities.LANG, '<?=$e->id ?>'); return false;"> + блок</a>
<?endif?>

<a class="add-element btn btn-success btn3d1 xs" href="#new_sub_element" onclick="Slonne.Entities.edit('<?=$essence->code ?>', 0, '<?=Entity2::TYPE_ELEMENTS?>', Slonne.Entities.LANG, '<?=$e->id?>'); return false;"> + элемент</a>

<a class="delete1 btn btn-danger btn3d1 xs" href="#delete" onclick="Slonne.Entities.delete('<?=$e->id ?>', '<?=$type?>'); return false;" >удалить</a> -->



<div class="entity-menu  <?=($essence->linear ? 'linear' : '')?>" style="opacity: .8; ">

    <?if(!$essence->linear):?>
    <a class="button blue xs chunky" href="#edit" onclick="Slonne.Entities.edit('<?=$essence->code ?>', '<?=$e->id?>', '<?=$type?>', Slonne.Entities.LANG); return false;"><i class="fa fa-pencil" aria-hidden="true"></i> редактировать</a>
    <?endif?>

    <?if(!$essence->jointFields && !$essence->linear):?>
	<a class="add-block" href="#new_sub_block" onclick="Slonne.Entities.edit('<?=$essence->code ?>', 0, '<?=Entity2::TYPE_BLOCKS?>', Slonne.Entities.LANG, '<?=$e->id ?>'); return false;"> + блок</a>
	<?endif?>

	<a class="add-element button green xs chunky" href="#new_sub_element" onclick="Slonne.Entities.edit('<?=$essence->code ?>', 0, '<?=Entity2::TYPE_ELEMENTS?>', Slonne.Entities.LANG, '<?=$e->id?>'); return false;"><i class="fa fa-plus" aria-hidden="true"></i> элемент</a>


    <?if(!$essence->jointFields && !$essence->linear):?>
	<a class="blocks-list" href="#sub_blocks_list" onclick="Slonne.Entities.entitiesList('<?=$e->id ?>', '<?=Entity2::TYPE_BLOCKS?>'); return false;" >список блоков</a>
	<?endif?>

    <?if(!$essence->linear):?>
	<a class="elements-list button white xs chunky " href="#sub_elements_list" onclick="Slonne.Entities.entitiesList('<?=(!$essence->linear ? $e->id : 0) ?>', '<?=Entity2::TYPE_ELEMENTS?>'); return false;" >список элементов</a>
    <?endif?>

    <?if(!$essence->linear):?>
    <a class="delete button red xs chunky" href="#delete" onclick="Slonne.Entities.delete('<?=$e->id ?>', '<?=$type?>'); return false;" > <i class="fa fa-times-circle" aria-hidden="true"></i> удалить</a>
    <?endif?>

</div>