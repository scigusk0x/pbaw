<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$lata = $_REQUEST ['lata'];
$procent = $_REQUEST ['procent'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($lata) && isset($procent))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
if (empty( $messages )) {
	
	// sprawdzenie, czy $kwota i $lata i $procent są liczbami
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

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//wykonanie operacji
	$miesiace = $lata * 12;
	$rata = $kwota / $miesiace;
	$rata *= (1 + $procent / 100);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($kwota,$lata,$procent,$miesiace,$rata)
//   będą dostępne w dołączonym skrypcie
include 'kalk_kred_view.php';