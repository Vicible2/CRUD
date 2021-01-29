<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>WarBase - Edit your collection of Warhammer Armies!</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
	

	Load table, (or only 1 row of table to be editable.)
	Save/submit edit button 
	When saved, go back to overview.php, overview loads edited data.
	

<!-- Add edit row -->
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
		<input type="text" id="faction" name="faction"><br>

		<label for="points">Points:</label><br>
		<input type="text" id="points" name="points"><br>
		<br>
		<input type="edit" value="edit" name="edit">
	</form>

</body>
</html>