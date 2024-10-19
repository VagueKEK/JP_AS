<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$amount = $_REQUEST ['amount'];
$years = $_REQUEST ['years'];
$interest = $_REQUEST ['interest'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amount) && isset($years) && isset($interest))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $amount == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $years == "") {
	$messages [] = 'Nie podano liczby lat';
}

if ( $interest == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty($messages)) {
    if (!is_numeric($amount) || $amount <= 0) {
        $messages[] = 'Kwota kredytu nie jest poprawną liczbą dodatnią';
    }
    if (!is_numeric($years) || $years <= 0 || intval($years) != $years) {
        $messages[] = 'Liczba lat nie jest poprawną liczbą całkowitą dodatnią';
    }
    if (!is_numeric($interest) || $interest < 0) {
        $messages[] = 'Oprocentowanie nie jest poprawną wartością';
    }
}

if (empty($messages)) {
    $amount = floatval($amount);
    $years = intval($years);
    $interest = floatval($interest) / 100; // Konwersja procent na format dziesiętny

    // Obliczanie miesięcznej raty kredytu 
    $m = 12; // Liczba miesięcy w roku
    $n = $years * $m; // Łączna liczba rat
    $R = $amount * pow(1 + ($interest / $m), $n) * ($interest / $m) / (pow(1 + ($interest / $m), $n) - 1);
	//zaokrąglenie do 2 miejsc po przecinku
	$R = round($R, 2);
    $result = $R;
}

include 'calc_view.php';