<?php require_once '../resources/views/layouts/header.php'; ?>
	
	<main class="container">
		
		<form action="" method="POST" class="form-contact">
			<h1> Contact </h1>

			<div class="form-group">
				<label for="name"> Name </label>
				<input type="text" name="name" id="name" placeholder="Name">
			</div>

			<div class="form-group">
				<label for="last_name"> Last Name </label>
				<input type="text" name="last_name" id="last_name" placeholder="Last Name">
			</div>

			<div class="form-group">
				<label for="phone"> Phone </label>
				<input type="text" name="phone" id="phone" placeholder="Phone">
			</div>

			<div class="form-group">
				<input type="submit" value="Guardar">
			</div>
		</form>

		<div class="list-contact">
			
			<?php foreach ($contacts as $contact): ?>
				<div class="card-contact">
					<h2> <?= $contact["name"] ?> </h2>
					<p> <?= $contact["phone"] ?> </p>

					<div class="card-buttons">
						<a href="/<?= $contact["id"] ?>"> Editar </a>

						<form action="/destroy/<?= $contact["id"] ?>" method="POST">
							<input type="submit" value="Delete">
						</form>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</main>
	

<?php require_once '../resources/views/layouts/footer.php'; ?>