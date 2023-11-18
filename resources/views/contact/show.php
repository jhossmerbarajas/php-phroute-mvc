<form action="/<?= $contact["id"] ?>" method="POST">
		<div>
			<input type="text" name="name" value="<?= $contact["name"] ?>">
		</div>

		<div>
			<input type="text" name="last_name" value="<?= $contact["last_name"] ?>">
		</div>

		<div>
			<input type="text" name="phone" value="<?= $contact["phone"] ?>">
		</div>

		<div>
			<input type="submit" value="Actualizar">
		</div>
	</form>