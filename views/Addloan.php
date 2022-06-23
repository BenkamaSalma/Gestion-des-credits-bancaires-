<?php 
	if(isset($_POST['submit'])){
		$loan = new TypeofloansController();
		$loan->addLoan();
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
				<div class="card-header">Ajouter un Crédit</div>
				<div class="card-body bg-light">
					<a href="adminpage" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
                      <label for="image">Upload photo(.jpg or .jpeg or  .gif or .png):</label>
                      <input type="file" name="image" id="image"  accept="image/*" required>
                      </div>
						<div class="form-group">
							<label for="loanType">Type de crédit*</label>
							<input type="text" name="loanType" class="form-control" placeholder="Type de crédit">
						</div>
						<div class="form-group">
							<label for="description">Déscription*</label>
							<input type="text" name="description" class="form-control" placeholder="Description">
						</div>
						
						<div class="form-group">
							<label for="montant">Montant*</label>
							<input type="text" name="montant" class="form-control" placeholder=montant required>
						</div>
						<div class="form-group">
							<label for="période">Période*</label>
							<input type="text" name="periode" class="form-control" placeholder=Période required>
						</div>
						
						
					    <!--<div class="Neon Neon-theme-dragdropbox">
        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="photo" id="filer_input2" multiple="multiple" type="file">
        <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
                    </div>-->
						
						 


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


