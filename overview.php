<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>WarBase - track your collection of Warhammer Armies!</title>
</head>
<body>

<h1>WarBase - track your collection of Warhammer Armies!</h1>

<ul>
<?php foreach ($cards as $card) : ?>
    <li><?= $card['name'] ?></li>
<?php endforeach; ?>
</ul>

<form action="" method="post">
<label for="unitName">Name:</label><br>
<input type="text" id="unitName" name="unitName"><br>

<label for="unitType">Unit Type:</label><br>
<input type="text" id="unitType" name="unitType"><br>

<label for="unitAmount">Amount of Units:</label><br>
<input type="number" id="unitAmount" name="unitAmount"><br>

<label for="faction">Faction:</label><br>
<input type="text" id="faction" name="faction"><br>
<br>
<input type="submit" value="submit">
</form>

</body>
</html>