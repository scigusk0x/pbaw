<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
  }

function getParams(){
	$_SESSION['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$_SESSION['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$_SESSION['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
    $_SESSION['messages'] = [];
    $_SESSION['rata'] = null;
}

function validate(){
	if ( ! (isset($_SESSION['kwota']) && isset($_SESSION['lata']) && isset($_SESSION['procent']))) {
		return false;
	}

	if ( $_SESSION['kwota'] == "") {
		$_SESSION['messages'] [] = 'Nie podano kwoty';
	}
	if ( $_SESSION['lata'] == "") {
		$_SESSION['messages'] [] = 'Nie podano lat';
	}
	if ( $_SESSION['procent'] == "") {
		$_SESSION['messages'] [] = 'Nie podano procenta';
	}

	if (count ( $_SESSION['messages'] ) != 0) return false;
	
	if (! is_numeric( $_SESSION['kwota'] )) {
		$_SESSION['messages'] [] = 'Kwota nie jest liczbą';
	} else {
		$_SESSION['kwota'] = floatval($_SESSION['kwota']);
		if ($_SESSION['kwota'] < 0) {
			$_SESSION['messages'] [] = 'Kwota jest liczbą mniejszą od zera';
		}
	}
	
	if (! is_numeric( $_SESSION['lata'] )) {
		$_SESSION['messages'] [] = 'Lata nie są liczbą';
	} else {
		$_SESSION['lata'] = intval($_SESSION['lata']);
		if ($_SESSION['lata'] <= 0) {
			$_SESSION['messages'] [] = 'Lata są liczbą mniejszą lub równą zero';
		}
	}

	if (! is_numeric( $_SESSION['procent'] )) {
		$_SESSION['messages'] [] = 'Procent nie jest liczbą';
	} else {
		$_SESSION['procent'] = floatval($_SESSION['procent']);
		if ($_SESSION['procent'] < 0) {
			$_SESSION['messages'] [] = 'Procent jest liczbą mniejszą od zera';
		}
	}

	if (count ( $_SESSION['messages'] ) != 0) return false;
	else return true;
}

function process(){
	$_SESSION['miesiace'] = $_SESSION['lata'] * 12;
	$_SESSION['rata'] = $_SESSION['kwota'] / $_SESSION['miesiace'];
	$_SESSION['rata'] *= (1+ $_SESSION['procent'] / 100);	
}

getParams();
if ( validate() ) {
	process();
}

include 'kalk_kred_view.php';