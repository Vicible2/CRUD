<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>WarBase - track your collection of Warhammer Armies!</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

	<h1 class="text-center text-light bg-dark">WarBase - track your collection of Warhammer Armies!</h1>

	<ul>
		<?php foreach ($cards as $card) : ?>
		<li><?= $card['Name'] . " " . $card['Unit Type'] ?></li>
		<?php endforeach; ?>
	</ul>

	<br>
	<hr>
	<h2 class="text-center text-light bg-dark">Skaven Army</h2>
	<table id='warbase' class="table table-sm table-hover table-dark">

		<tr>
			<th scope="col">Name</th>
			<th scope="col">Unit Type</th>
			<th scope="col">Amount of units</th>
			<th scope="col">Faction</th>
			<th scope="col">Points</th>
		</tr>
		<?php foreach ($cards as $card) : ?>
		<tr>
			<td> <?= $card['Name']?> </td>
			<td> <?= $card['Unit Type']?> </td>
			<td> <?= $card['Amount of Units']?> </td>
			<td> <?= $card['Faction']?> </td>
			<td> <?= $card['Points']?> </td>
			<td></td>
		</tr>
		
		<?php endforeach; ?>
		<tr>
			<th scope="col"> Total points: </th>
			<th scope="col"> </th>
			<th scope="col"> </th>
			<th scope="col"> </th>
			<th scope="col"> <?php $totalPoints = 0; foreach($card['Points'] as $points) { $points += $points;}
			echo $totalpoints;
				?></th>
		</tr>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>