<?php 
  if(isset($_POST['id'])){
    $exitClient = new ClientController();
    $cl = $exitClient->getdoc();
  }else{
    Redirect::to('demandeaccepte');
  } 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Documents téléchargés</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/styleadminpage.css">
</head>
<body>
<div class="container">
  <div class="row my-8">
    <div class="col-md-8 mx-auto">
      <?php include('./views/includes/alerts.php');?>
      <div class="card">
        </div><div class="form">
         <div class="card-body bg-light">
          
          <a href="http://127.0.0.1/final/adminpage" class="btn btn-sm btn-secondary mr-2 mb-2">
            <i class="fas fa-home"></i>
          </a>
          
            
          </a>
          <form method="post" class="float-right mb-2 d-flex flex-row">
            <input type="text" class="form-control" name="search" placeholder="Recherche">
            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
          </form>
          <table class="table table-hover">
            <thead>
              <tr>
                
                <th scope="col">Nom du documents</th>
                <th scope="col">fichier</th>
                <th scope="col">date de dépot </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($cl as $dem):?>
                <tr>
                 <!--<th scope="row"><button><a href=profileclient><?php echo $dem['id']; ?></a></button></th>-->
                  <th scope="row"><?php echo $dem['nomdoc']; ?></th>
                  <td><a href="<?php echo $dem['fileurl']; ?>" class="btn btn-success" target="_blank">Télécharger</a></td>
                  <td><?php echo $dem['datedepot'];?></td>
                  </tr>
                            
                  
                  
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
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
</body>
</html>