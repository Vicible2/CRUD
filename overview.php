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
		<li><?= $card['Name'] . " " . $card['Unit Type'] ?></li>
		<?php endforeach; ?>
	</ul>

	<br>
	<hr>
	<h2>Skaven Army</h2>
	<table id='warbase'>

		<tr>
			<th>Name</th>
			<th>Unit Type</th>
			<th>Amount of units</th>
			<th>Faction</th>
			<th>Points</th>
		</tr>
		<?php foreach ($cards as $card) : ?>
		<tr>
			<td> <?= $card['Name']?> </td>
			<td> <?= $card['Unit Type']?> </td>
			<td> <?= $card['Amount of Units']?> </td>
			<td> <?= $card['Faction']?> </td>
			<td> <?= $card['Points']?> </td>
		</tr>
		<?php endforeach; ?>
	</table>

	<hr>
<h2>Total amount of points:</h2>
<h4>  </h4>
	<br>
	<hr>
	<br>
	<form action="" method="POST">
		<!-- Pick your Race-->
		<input type="radio" name="race" value="skaven">Skaven
		<input type="radio" name="race" value="ossiarch">Ossiarch Bonereapers
		<input type="radio" name="race" value="seraphon">Seraphon
		<br>

		<label for="unitName">Name:</label><br>
		<input type="text" id="unitName" name="unitName"><br>

		<label for="unitType">Unit Type:</label><br>
		<input type="text" id="unitType" name="unitType"><br>

		<label for="unitAmount">Amount of Units:</label><br>
		<input type="number" id="unitAmount" name="unitAmount"><br>

		<label for="faction">Faction:</label><br>
		<input type="text" id="faction" name="faction"><br>

		<label for="points">Points:</label><br>
		<input type="text" id="points" name="points"><br>
		<br>
		<input type="submit" value="submit" name="submit">
	</form>


	<?php 
echo "<pre>";
var_dump($_POST);
echo "</pre>";
?>
</body>

</html>