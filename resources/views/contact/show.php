<?php require_once '../resources/views/layouts/header.php'; ?>
	
	<main class="container">
		<form action="/<?= $contact["id"] ?>" method="POST" class="form-contact">
				<h1> Contact </h1>

				<div class="form-group">
					<label for="name"> Name </label>
					<input type="text" name="name" id="name" value="<?= $contact["name"] ?>" data-id="<?= $contact["id"] ?>">
				</div>

				<div class="form-group">
					<label for="last_name"> Last Name </label>
					<input type="text" name="last_name" id="last_name" value="<?= $contact["last_name"] ?>">
				</div>

				<div class="form-group">
					<label for="phone"> Phone </label>
					<input type="text" name="phone" id="phone" value="<?= $contact["phone"] ?>">
				</div>

				<div class="form-group">
					<input type="submit" value="Guardar">
				</div>
			</form>
		
	</main>

	<?php require_once '../resources/views/layouts/footer.php'; ?>