<?php
//vd($MODEL);
?>

<h1><span class="fa fa-sliders"></span> Настройки сайта</h1>


<?php if($MODEL['error']){ echo ''.$MODEL['error'].''; return; }?>







<form class="settings" method="post" action="">


    <div class="container-fluid">

        <div class="col-lg-10">


            <div class="row">

                <div class="col-lg-6">
                    <fieldset>
                        <legend>Заголовок сайта</legend>

                        <div class="row1">
                            <span class="label block" >Название сайта в заголовке:</span>
                            <span class="input"><input type="text" name="title_postfix" size="40" value="<?=addslashes($_CONFIG['SETTINGS']['title_postfix'])?>"></span>
                            <div class="hint">Будет всегда добавляться после указанного в контроллере заголовка.</div>
                        </div>

                        <div class="row1">
                            <span class="label">Разделитель частей заголовка:</span>
                            <span class="input"><input type="text" name="title_separator" size="2" value="<?=addslashes($_CONFIG['SETTINGS']['title_separator'])?>"></span>
                            <div class="hint">Символ, разделяющий части заголовка (например "Новости - abc.kz")</div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Мета-теги</legend>

                        <div class="row1">
                            <span class="label">Description:</span>
                            <span class="input"><textarea name="description"><?=$_CONFIG['SETTINGS']['description']?></textarea></span>
                        </div>

                        <div class="row1">
                            <span class="label">Keywords:</span>
                            <span class="input"><textarea name="keywords"><?=$_CONFIG['SETTINGS']['keywords']?></textarea></span>
                        </div>
                    </fieldset>
                </div>

                <div class="col-lg-6">

                    <fieldset>
                        <legend>Контакты компании</legend>

                        <div class="row1">
                            <span class="label">Телефон:</span>
                            <span class="input"><input type="text" name="contactsPhone" size="40" value="<?=addslashes($_CONFIG['SETTINGS']['contactsPhone'])?>"></span>
                            <div class="hint">Можно указать несколько, через запятую</div>
                        </div>

                        <div class="row1">
                            <span class="label">Раб. email:</span>
                            <span class="input"><input type="text" name="contactsEmail" size="40" value="<?=addslashes($_CONFIG['SETTINGS']['contactsEmail'])?>"></span>
                            <div class="hint">Можно указать несколько, через запятую</div>
                        </div>

                        <div class="row1">
                            <span class="label">Адрес:</span>
                            <span class="input"><textarea name="contactsAddress"><?=$_CONFIG['SETTINGS']['contactsAddress']?></textarea></span>
                        </div>

                        <div class="row1">
                            <span class="label">Google Maps:</span>
                            <span class="input"><textarea name="contactsGoogleMapCode"><?=$_CONFIG['SETTINGS']['contactsGoogleMapCode']?></textarea></span>
                        </div>

                        <div class="row1">
                            <span class="label block">Email для обратной связи:</span>
                            <span class="input"><input type="text" name="robotEmail" size="40" value="<?=addslashes($_CONFIG['SETTINGS']['robotEmail'])?>"></span>
                            <div class="hint">Сюда будут приходить письма от клиентов</div>
                        </div>

                    </fieldset>


                    <fieldset>
                        <legend>Соц. сети</legend>

                        <div class="row1">
                            <span class="label">Instagram:</span>
                            <span class="input"><input type="text" name="instagram" size="40" value="<?=addslashes($_CONFIG['SETTINGS']['instagram'])?>"></span>
                        </div>

                        <div class="row1">
                            <span class="label">Facebook:</span>
                            <span class="input"><input type="text" name="facebook" size="40" value="<?=addslashes($_CONFIG['SETTINGS']['facebook'])?>"></span>
                        </div>

                        <div class="row1">
                            <span class="label">ВКонтакте:</span>
                            <span class="input"><input type="text" name="vk" size="40" value="<?=addslashes($_CONFIG['SETTINGS']['vk'])?>"></span>
                        </div>

                    </fieldset>

                </div>


            </div>




        </div>
    </div>






	
	
	<input type="submit" name="go_btn" value="Сохранить">
	
	
	
</form>