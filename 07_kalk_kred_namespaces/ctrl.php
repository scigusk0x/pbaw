<?php

require_once 'init.php';

switch ($action) {
    case 'emptyCalcView':
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcComputeView':
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->process();
        break;
    case 'startPageView';
        include_once 'app/controllers/SPCtrl.class.php';
        $ctrl = new app\controllers\SPCtrl();
        $ctrl->generateView();
        break;
    default:
        include_once 'app/controllers/SPCtrl.class.php';
        $ctrl = new app\controllers\SPCtrl();
        $ctrl->generateView();
        break;
}