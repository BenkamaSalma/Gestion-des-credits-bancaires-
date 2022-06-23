<?php 
	if(isset($_POST['idl'])){
		$exitloan = new TypeofloansController();
		$loan = $exitloan->getOneLoan();
	}else{
		Redirect::to('loans');
	} 
	if(isset($_POST['submit'])){
		$exitloan = new TypeofloansController();
		$exitloan->updateLoan();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Loans</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	<link rel="stylesheet"  href="http://127.0.0.1/final/public/assets/photo.css">
</head>
<body>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Modifier un crédit</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="loanType">Type de crédit*</label>
							<input type="text" name="loanType" class="form-control" placeholder="Type de crédit"
							value="<?php echo $loan->loanType; ?>"
							>
						</div>
						<div class="form-group">
							<label for="description">Description*</label>
							<input type="text" name="description" class="form-control" placeholder="Description"
							value="<?php echo $loan->description; ?>"
							>
						</div>
						
						<div class="form-group">
							<label for="montant">Montant*</label>
							<input type="text" name="montant" class="form-control" placeholder="montant"
							value="<?php echo $loan->montant; ?>">
						</div>
						<div class="form-group">
							<label for="période">Période*</label>
							<input type="text" name="periode" class="form-control" placeholder="Période"
							value="<?php echo $loan->periode; ?>">
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