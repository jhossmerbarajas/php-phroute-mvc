<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="/" method="POST">
		<div>
			<input type="text" name="name" placeholder="Name">
		</div>

		<div>
			<input type="text" name="last_name" placeholder="Last Name">
		</div>

		<div>
			<input type="text" name="phone" placeholder="Phone">
		</div>

		<div>
			<input type="submit" value="Guardar">
		</div>
	</form>
	
	<?php foreach ($contacts as $contact): ?>
		<div>
			<h2> <?= $contact["name"] ?> </h2>
			<p> <?= $contact["phone"] ?> </p>
			<a href="/<?= $contact["id"] ?>"> Editar </a>
		</div>
	<?php endforeach; ?>

</body>
</html>