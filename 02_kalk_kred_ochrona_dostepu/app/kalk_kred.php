<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota,&$lata,&$procent){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$lata,&$procent,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($lata) && isset($procent))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $lata == "") {
		$messages [] = 'Nie podano lat';
	}
	if ( $procent == "") {
		$messages [] = 'Nie podano procenta';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $kwota, $lata i $procent są liczbami większymi od zera
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą';
	} else {
		$kwota = floatval($kwota);
		if ($kwota < 0) {
			$messages [] = 'Kwota jest liczbą mniejszą od zera';
		}
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Lata nie są liczbą';
	} else {
		$lata = intval($lata);
		if ($lata <= 0) {
			$messages [] = 'Lata są liczbą mniejszą lub równą zero';
		}
	}

	if (! is_numeric( $procent )) {
		$messages [] = 'Procent nie jest liczbą';
	} else {
		$procent = floatval($procent);
		if ($procent < 0) {
			$messages [] = 'Procent jest liczbą mniejszą od zera';
		}
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$lata,&$procent,&$messages,&$rata){
	global $role;

	if ($role == 'user' && $procent < 10) {
		$messages [] = 'Tylko vip może wziąć kredyt na procent mniejszy niż 10';
		return;
	}

	//wykonanie operacji
	$miesiace = $lata * 12;
	$rata = $kwota / $miesiace;
	$rata *= (1+ $procent / 100);	
}

//definicja zmiennych kontrolera
$kwota = null;
$lata = null;
$procent = null;
$rata = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$lata,$procent);
if ( validate($kwota,$lata,$procent,$messages) ) { // gdy brak błędów
	process($kwota,$lata,$procent,$messages,$rata);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$lata,$procent,$rata)
//   będą dostępne w dołączonym skrypcie
include 'kalk_kred_view.php';