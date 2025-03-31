<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';

class SPCtrl {
    public function generateView() {
        global $conf;

        $smarty = new Smarty\Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Strona startowa');
        $smarty->assign('page_description','Galeria zdjęć');
        
        $smarty->display($conf->root_path.'/app/startpage/StartPageView.html');
    }
}