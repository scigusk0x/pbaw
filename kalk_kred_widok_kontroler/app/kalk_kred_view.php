<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body style="background-color: hsl(0, 0%, 20%); color: white;">

<form action="<?php print(_APP_URL);?>/app/kalk_kred.php" method="get">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br>

	<label for="id_lata">Lata: </label>
	<input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" style="margin: 10px 0"/><br>

	<label for="id_procent">Procent: </label>
	<input id="id_procent" type="text" name="procent" value="<?php if (isset($procent)) print($procent); ?>" /><br>

	<input type="submit" value="Oblicz miesięczną ratę" style="margin: 10px 0"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: tomato; width:300px;">';
	foreach ( $messages as $key => $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>

<?php if (isset($rata)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: green; width:300px;">
<?php echo 'Miesięczna rata: '.$rata; ?>
</div>
<?php } ?>

</body>
</html>