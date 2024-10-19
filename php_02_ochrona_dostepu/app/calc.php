<?php
require_once dirname(__FILE__) . '/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH . '/app/security/check.php';

//pobranie parametrów
function getParams(&$amount, &$years, &$interest)
{
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$amount, &$years, &$interest, &$messages)
{
	// sprawdzenie, czy parametry zostały przekazane
	if (!(isset($amount) && isset($years) && isset($interest))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ($amount == "") {
		$messages[] = 'Nie podano kwoty';
	}
	if ($years == "") {
		$messages[] = 'Nie podano liczby lat';
	}
	if ($interest == "") {
		$messages[] = 'Nie podano oprocentowania';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count($messages) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (!is_numeric($amount)) {
		$messages[] = 'Kwota kredytu nie jest poprawną liczbą dodatnią';
	}

	if (!is_numeric($years)) {
		$messages[] = 'Liczba lat nie jest poprawną liczbą całkowitą dodatnią';
	}

	if (!is_numeric($interest)) {
		$messages[] = 'Oprocentowanie nie jest poprawną wartością';
	}

	if (count($messages) != 0) return false;
	else return true;
}

function process(&$amount, &$years, &$interest, &$messages, &$result)
{
	global $role;

	//konwersja parametrów
	$amount = floatval($amount);
	$years = intval($years);
	$interest = floatval($interest); // Konwersja procent na format dziesiętny
	// Obliczanie miesięcznej raty kredytu 
	$months = 12; // Liczba miesięcy w roku
	$total_months = $years * $months; // Łączna liczba rat

	if ($interest > 5) {
		if ($role == 'admin') {
			$result = $amount * pow(1 + (($interest / 100) / $months), $total_months) * (($interest / 100) / $months) / (pow(1 + (($interest / 100) / $months), $total_months) - 1);
		} else {
			$messages[] = 'Ta opcja jest dotępna tylko dla administratora';
		}
	} else {
		$result = $amount * pow(1 + (($interest / 100) / $months), $total_months) * (($interest / 100) / $months) / (pow(1 + (($interest / 100) / $months), $total_months) - 1);
		//zaokrąglenie do 2 miejsc po przecinku
		$result = round($result, 2);
	}
}

//definicja zmiennych kontrolera
$amount = null;
$years = null;
$interest = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($amount, $years, $interest);
if (validate($amount, $years, $interest, $messages)) { // gdy brak błędów
	process($amount, $years, $interest, $messages, $result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';