<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lektion php</title>
</head>
<body>

<?php 

echo "Қазақша IT сабақтары - Шынболат Жақсыбаев" . "</br>";

echo "
PHP қазақша курсы. 6 - сабақ. Формамен жұмыс жасау. GET, POST методтары." . "</br>";

//$_GET - глобальды айнымалы

// HTML ережесі бойынша, форма submit басқан кезде методы көрсетілген болмаса, оның бастапқы түрі $_GET метод болып саналады

$total = 0;
$totalGet = 0;

if(isset($_POST['submitPost'])) {

	$apple = $_POST['apple'];
	$banana = $_POST['banana'];
	$total = $apple + $banana;
}

if(isset($_GET['submitGet'])) {

	$inputFirst = $_GET['inputFirst'];
	$inputSecond = $_GET['inputSecond'];
	$totalGet = $inputFirst + $inputSecond;
}

?>

Нәтиже Post <?php echo $total; ?>

<form method="POST">
	<input name="apple" placeholder="apple">
	<input name="banana" placeholder="banana">
	<input type="submit" name="submitPost">
</form>

Нәтиже Get <?php echo $totalGet; ?>

<form method="GET">
	<input name="inputFirst" placeholder="inputFirst">
	<input name="inputSecond" placeholder="inputSecond">
	<input type="submit" name="submitGet">
</form>

	
</body>
</html>