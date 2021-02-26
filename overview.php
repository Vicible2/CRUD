<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>WarBase - track your collection of Age of Sigmar Armies!</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>

<body class="text-light bg-dark">

<blockquote class="blockquote text-center "> <p class="mb-2 h1 warBase">WarBase</p>
<footer class="blockquote-footer text-right">Track your collection of Age of Sigmar Armies! </footer>
</blockquote>


	<ul>
		<?php foreach ($skavenCards as $skavenCard): ?>
		<li><?=$skavenCard['Name'] . " " . $skavenCard['Unit Type']?></li>
		<?php endforeach;?>
	</ul>

	<br>
	<hr>
	<div class="armies d-flex">
		<div class="skavenTable armyTables">
			<img src="./assets/skavenLogo.png" alt="skavenLogo" class="skavenLogo armyLogos">
			<h2 class="text-center text-light bg-dark">Skaven</h2>

				<table id='warbase' class="table table-sm table-hover table-dark">

					<tr>
						<th scope="col">Name</th>
						<th scope="col">Unit Type</th>
						<th scope="col">Amount of units</th>
						<th scope="col">Faction</th>
						<th scope="col">Points</th>
					</tr>
					<?php foreach ($skavenCards as $skavenCard): ?>
					<tr>
						<td> <?=$skavenCard['Name']?> </td>
						<td> <?=$skavenCard['Unit Type']?> </td>
						<td> <?=$skavenCard['Amount of Units']?> </td>
						<td> <?=$skavenCard['Faction']?> </td>
						<td> <?=$skavenCard['Points']?> </td>
						<td class="btn btn-outline-light mb-2 mt-2"> edit link</td>
					</tr>

					<?php endforeach;?>
					<tr>
						<th scope="col"> Total points: </th>
						<th scope="col"> </th>
						<th scope="col"> </th>
						<th scope="col"> </th>
						<th scope="col"> <?=$totalPoints?></th>
					</tr>
				</table>
			</div>

		<div class="OSBTable armyTables">
		<img src="./assets/OSBLogo.png" alt="OSBLogo" class="OSBLogo armyLogos">
			<h2 class="text-center text-light bg-dark">Ossiarch Bonereapers</h2>

			<table id='warbase' class="table table-sm table-hover table-dark">

				<tr>
					<th scope="col">Name</th>
					<th scope="col">Unit Type</th>
					<th scope="col">Amount of units</th>
					<th scope="col">Faction</th>
					<th scope="col">Points</th>
				</tr>
				<?php foreach ($OSBCards as $OSBcard): ?>
				<tr>
					<td> <?=$OSBcard['Name']?> </td>
					<td> <?=$OSBcard['Unit Type']?> </td>
					<td> <?=$OSBcard['Amount of Units']?> </td>
					<td> <?=$OSBcard['Faction']?> </td>
					<td> <?=$OSBcard['Points']?> </td>
					<td class="btn btn-outline-light mb-2 mt-2"> edit link</td>
				</tr>

				<?php endforeach;?>
				<tr>
					<th scope="col"> Total points: </th>
					<th scope="col"> </th>
					<th scope="col"> </th>
					<th scope="col"> </th>
					<th scope="col"> <?=$totalPoints?></th>
				</tr>
			</table>
		</div>
		<div class="seraphonTable armyTables">
		<img src="./assets/seraphonLogo.png" alt="seraphonLogo" class="seraphonLogo armyLogos">
			<h2 class="text-center text-light bg-dark">Seraphon</h2>

			<table id='warbase' class="table table-sm table-hover table-dark">

				<tr>
					<th scope="col">Name</th>
					<th scope="col">Unit Type</th>
					<th scope="col">Amount of units</th>
					<th scope="col">Faction</th>
					<th scope="col">Points</th>
				</tr>
				<?php foreach ($seraphonCards as $seraphonCard): ?>
				<tr>
					<td> <?=$seraphonCard['Name']?> </td>
					<td> <?=$seraphonCard['Unit Type']?> </td>
					<td> <?=$seraphonCard['Amount of Units']?> </td>
					<td> <?=$seraphonCard['Faction']?> </td>
					<td> <?=$seraphonCard['Points']?> </td>
					<td class="btn btn-outline-light mb-2 mt-2"> edit link</td>
				</tr>

				<?php endforeach;?>
				<tr>
					<th scope="col"> Total points: </th>
					<th scope="col"> </th>
					<th scope="col"> </th>
					<th scope="col"> </th>
					<th scope="col"> <?=$totalPoints?></th>
				</tr>
			</table>
		</div>
	</div>
	<hr>
<h2 class="text-center">Total amount of points:</h2>
<h4>  </h4>
	<br>
	<hr>
	<br>
	<form action="" method="POST" class="text-center">
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
		<select id="faction" name="faction"><br>
		<option value=" " selected> </option>
					<option value="Grand Alliance Chaos">Grand Alliance Chaos</option>
					<option value="Grand Alliance Death">Grand Alliance Death</option>
					<option value="Grand Alliance Order">Grand Alliance Order</option>
		</select> <br>
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

<div class="footer" id="footer">
	<div class="footerSubsection1">
		<div class="warBase footerwarBase">
			<p>WarBase</p>
		</div>
		<div class="footerInfo">
			<p>WarBase - a Warhammer: Age of Sigmar army building tool.
			<br> Made by fans. Not affiliated with Games Workshop™ in any way.</p>
		</div>
		<div class="footerLogo">
			<img src="./assets/AoS.png" class="AoSLogo" alt="AoSLogo">
		</div>
	</div>
	<div class="footerSubsection2">
		<p>2021 © Devillé Manten - for beCode </p>
	</div>
<div>
</body>

</html>