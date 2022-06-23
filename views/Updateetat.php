<?php 
	if(isset($_POST['idd'])){
		$exitdemande = new DemandeController();
		$demande = $exitdemande->getOneDemande();
	}else{
		Redirect::to('applications');
	} 
	if(isset($_POST['submit'])){
		$exitdemande = new DemandeController();
		$exitdemande->Updateetat();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Managers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
</head>
<body>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Modifier l'etat de la demande</div>
				<div class="card-body bg-light">
					<a href="http://127.0.0.1/final/applications" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="id">ID</label>
							<input type="text" name="id" class="form-control" placeholder="Nom"
							value="<?php echo $demande->id; ?>"
							>
						</div>
						<div class="form-group">
							<label for="typecredit">Type du crédit</label>
							<input type="text" name="typecredit" class="form-control" 
							value="<?php echo $demande->typecredit; ?>"
							>
						</div>
						<div class="form-group">
							<label for="montantcredit">Montant du crédit</label>
							<input type="text" name="montantcredit" class="form-control" 
								value="<?php echo $demande->montantcredit; ?>">
						</div>
						<div class="form-group">
							<label for="revenum">Revenus mensuels</label>
							<input type="text" name="revenum" class="form-control" 
							value="<?php echo $demande->revenum; ?>">
							<input type="hidden" name="idd" value="<?php echo $demande->idd;?>">
						</div>
						<div class="form-group">
							<label for="chargesm">Charges mensuelles</label>
							<input type="text" name="chargesm" class="form-control" 
							value="<?php echo $demande->chargesm; ?>">
						</div>
						<div class="form-group">
							<label for="datecr">Date de déposition de la demande</label>
							<input type="text" name="datecr" class="form-control"
							value="<?php echo $demande->datecr; ?>">
						</div>
						<div class="form-group">
							<label for="etatcredit">Etat du crédit</label>
							<!--<input type="text" name="etatcredit" class="form-control"
							value="<?php echo $demande->etatcredit; ?>">-->
							<td>Service : </td>
                                <td>
                          <select name="etatcredit"><br>
                    <option value="en cours de traitement">en cours de traitement</option>
                    <option value="validée">validée</option>
                    <option value="refusée">refusée</option>
                </select>
            </td> 
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