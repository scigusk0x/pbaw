<?php
// KONTROLER strony startowej
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('current_page','start_page');
$smarty->assign('page_title','Strona startowa');
$smarty->assign('page_description','Zdjęcia i wideo');

$smarty->display(_ROOT_PATH.'/app/start_page.html');
?>