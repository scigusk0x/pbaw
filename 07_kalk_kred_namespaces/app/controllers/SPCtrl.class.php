<?php
namespace app\controllers;

class SPCtrl {
    public function generateView() {
        getSmarty()->assign('page_title','Strona startowa');
        getSmarty()->assign('page_description','Galeria zdjęć');
        
        getSmarty()->display('StartPageView.tpl');
    }
}