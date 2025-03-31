<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once dirname (__FILE__).'/../config.php';

//1. pobierz nazwę akcji

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'startPageView';

switch ($action) {
    case 'emptyCalcView':
        include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcComputeView':
        include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
    case 'startPageView';
        include_once $conf->root_path.'/app/startpage/SPCtrl.class.php';
        $ctrl = new SPCtrl();
        $ctrl->generateView();
        break;
}