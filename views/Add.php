<?php 
	if(isset($_POST['submit'])){
		$client = new ClientController();
		$client->addClient();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Clients</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
</head>
<body>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Ajouter un client</div>
				<div class="card-body bg-light">
					<a href="adminpage" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">Nom*</label>
							<input type="text" name="nom" class="form-control" placeholder="Nom">
						</div>
						<div class="form-group">
							<label for="prenom">Prénom*</label>
							<input type="text" name="prenom" class="form-control" placeholder="Prénom">
						</div>
						<div class="form-group">
							<label for="Sexe">Sexe*</label>
							<input type="text" name="sexe" class="form-control" placeholder="Sexe" required>
						</div>
						<div class="form-group">
							<label for="Nationalité">Nationalité*</label>
							<input type="text" name="nationalite" class="form-control" placeholder="Nationalité" required>
						</div>
						<div class="form-group">
							<label for="Etat_civil">Etat civil*</label>
							<input type="text" name="etatc" class="form-control" placeholder="Etat civil" required>
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="text" name="email" class="form-control" placeholder=email required>
						</div>
						<div class="form-group">
							<label for="Numtel">Numero de telephone*</label>
							<input type="text" name="numtel" class="form-control" placeholder=Numéro_de_téléphone required>
						</div>
						<div class="form-group">
							<label for="Salaire">Salaire*</label>
							<input type="text" name="salaire" class="form-control" placeholder=Salaire required>
						</div>
						<div class="form-group">
							<label for="Adresse">Adresse*</label>
							<input type="text" name="Adresse" class="form-control" placeholder=Adresse required>
						</div>
						<div class="form-group">
							<label for="Datenaissance">Date de naissance*</label>
							<input type="date" name="dn" class="form-control" placeholder=Date_naissance required>
						</div>
						<div class="form-group">
							<label for="Username">Username*</label>
							<input type="text" name="username" class="form-control" placeholder=Username required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


