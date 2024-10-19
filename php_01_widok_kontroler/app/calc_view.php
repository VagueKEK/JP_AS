<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_amount">Kwota kredytu: </label><br/>
	<input id="id_amount" type="text" name="amount" value="<?php echo isset($amount) ? $amount : ''; ?>" /><br />
	<label for="id_years">Liczba lat:  </label><br/>
	<input id="id_years" type="numbers" name="years" value="<?php echo isset($years) ? $years : ''; ?>" /><br />
	<label for="id_interest">Oprocentowanie roczne (%): </label><br/>
	<input id="id_interest" type="numbers" name="interest" value="<?php echo isset($interest) ? $interest : ''; ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata kredytu: '.$result.' zł'; ?>
</div>
<?php } ?>

</body>
</html>