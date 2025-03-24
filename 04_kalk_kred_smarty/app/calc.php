<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
    // $form['messages'] = [];
    // $form['rata'] = null;
}

function validate(&$form, &$messages){
	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['procent']))) {
		return false;
	}

	if ( $form['kwota'] == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $form['lata'] == "") {
		$messages [] = 'Nie podano lat';
	}
	if ( $form['procent'] == "") {
		$messages [] = 'Nie podano procenta';
	}

	if (count ( $messages ) != 0) return false;
	
	if (! is_numeric( $form['kwota'] )) {
		$messages [] = 'Kwota nie jest liczbą';
	} else {
		$form['kwota'] = floatval($form['kwota']);
		if ($form['kwota'] < 0) {
			$messages [] = 'Kwota jest liczbą mniejszą od zera';
		}
	}
	
	if (! is_numeric( $form['lata'] )) {
		$messages [] = 'Lata nie są liczbą';
	} else {
		$form['lata'] = intval($form['lata']);
		if ($form['lata'] <= 0) {
			$messages [] = 'Lata są liczbą mniejszą lub równą zero';
		}
	}

	if (! is_numeric( $form['procent'] )) {
		$messages [] = 'Procent nie jest liczbą';
	} else {
		$form['procent'] = floatval($form['procent']);
		if ($form['procent'] < 0) {
			$messages [] = 'Procent jest liczbą mniejszą od zera';
		}
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$form, &$messages, &$rata){
	$miesiace = $form['lata'] * 12;
	$rata = $form['kwota'] / $miesiace;
	$rata *= (1+ $form['procent'] / 100);	
}

//inicjacja zmiennych
$form = null;
$messages = array();
$rata = null;
	
getParams($form);
if ( validate($form,$messages) ){
	process($form,$messages,$rata);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('current_page','calc');
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_description','Oblicz ratę swojego kredytu');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('rata',$rata);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');