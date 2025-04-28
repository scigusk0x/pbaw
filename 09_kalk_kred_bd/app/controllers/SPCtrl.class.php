<?php
namespace app\controllers;

class SPCtrl {
    public function action_startPageShow() {
        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_title','Strona startowa');
        getSmarty()->assign('page_description','Galeria zdjęć');
        
        getSmarty()->display('StartPageView.tpl');
    }
}