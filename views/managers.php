<?php 
	if(isset($_POST['find'])){
		$data = new ManagerController();
		$manager = $data->findManager();
	}else{
		$data = new ManagerController();
		$manager = $data->getAllManager();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Clients</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	<link rel="stylesheet" href="http://127.0.0.1/final/public/assets/styleadminpage.css">
</head>
<body>
	<header role="banner">
  <h1>Admin Page</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#">My Account</a></li>
    <li class="logout warn"><a href="choicelogin">Log Out</a></li>
  </ul>
</header>
<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="admindashboard">Dashboard</a></li>
    <li class="edit"><a href="">Loan Applications</a></li>
    <li class="edit"><a href="loans">Type of loans</a></li>
    <li class="write"><a href="client">Clients</a></li>
    
    <li class="users"><a href="managers">Managers</a></li>
    <li class="comments"><a href="#">Settings</a></li>
  </ul>
</nav>
	<br>
					
					<br>
					<br>
					<br>
					<br>
					<br>
<div class="container">
	<div class="row my-4">
		<div class="col-md-14 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				
				<div class="card-body bg-light">
					<a href="http://127.0.0.1/final/Addmanager" class="btn btn-sm btn-primary mr-2 mb-2">
						<i class="fas fa-plus"></i>
					</a>
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<a href="<?php echo BASE_URL;?>logout" title="Déconnexion" class="btn btn-link mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php echo $_SESSION['username'];?></i>
					</a>
					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Recherche">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>


					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Nom & Prénom</th>
					      
					      <th scope="col">Email</th>
					      <th scope="col">Numéro de téléphone</th>
					  
					      <th scope="col">Username</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($manager as $cl):?>
					    	<tr>
						      <th scope="row"><?php echo $cl['nom'].' '.$cl['prenom']; ?></th>
						     
						      <td><?php echo $cl['email'];?></td>
						      <td>
						      	<?php echo $cl['tel'];?></td>
						      	
						      	<td><?php echo $cl['username'];?></td>
						      <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="Updatemanager">
						      		<input type="hidden" name="id" value="<?php echo $cl['id'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      	<form method="post" class="mr-1" action="Deletemanager">
						      		<input type="hidden" name="id" value="<?php echo $cl['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
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


