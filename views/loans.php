<?php 
  if(isset($_POST['find'])){
    $data = new TypeofloansController();
    $loan = $data->findLoan();
  }else{
    $data = new TypeofloansController();
    $loan = $data->getAllLoans();
  }
?>
           


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste des clients| S&R</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/test.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  <input type="checkbox" id="menu" name="">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>R&S</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="test" class="active"><span class="fa fa-home"></span><span>Dashboard</span></a>
        </li>
        <li>
          <a href="loans"><span class="fa fa-tasks"></span><span>Les types de crédits</span></a>
        </li>
        <li>
          <a href="applications"><span class="fa fa-th-large"></span><span>Les demandes de crédits</span></a>
        </li>
        <li>
          <a href="demandeaccepte"><span class="fa fa-line-chart"></span><span>Les crédits accéptés</span></a>
        </li>
        <li>
          <a href="client"><span class="fa fa-address-book"></span><span>Les clients</span></a>
        </li>
       
      </ul>
    </div>
  </div>



  <div class="content">
    
    <header>
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

      <div class="search-wrapper">
        <span class="fa fa-search"></span>
        <input type="search" name="" placeholder="recherche" />
      </div>

      <div class="user-wrapper" id="dropdown">
        <div>
          <small>Admin</small>
        </div>
        
        <img src="public/assets/admin.png" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
        <p><a href="choicelogin">Deconnexion</a></p>
        </div>
        
      </div>
    </header>
<div class="container">
  <div class="row my-8">
    <div class="col-md-8 mx-auto">
      <?php include('./views/includes/alerts.php');?>
      <div class="card">
        </div><div class="form">
         <div class="card-body bg-light">
          <a href="http://127.0.0.1/final/Add" class="btn btn-sm btn-primary mr-2 mb-2">
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




                <div class="composant">
        <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Listes des crédits <br>
              <a href="http://127.0.0.1/final/Addloan" class="btn btn-sm btn-primary mr-2 mb-2">
            <i class="fas fa-plus"></i>
          </a></h2>
              
            </div>
            <div class="body-case">
              <div class="tableau">
                <table width="100%">
                  <thead>
                    <tr>
                 <th scope="col">Type of loan</th>
                <th scope="col">description</th>
                <th scope="col">montant</th>
                <th scope="col">période</th>
                
                <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($loan as $cl):?>
                <tr>

                  <th scope="row"><?php echo $cl['loanType']; ?></th>
                  <td><?php echo $cl['description'];?></td>
                  <td><?php echo $cl['montant'];?></td>
                  <td><?php echo $cl['periode'];?></td>
                  
                  <td class="d-flex flex-row">
                    <form method="post" class="mr-1" action="Updateloan">
                      <input type="hidden" name="idl" value="<?php echo $cl['idl'];?>">
                      <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                    </form>
                    <form method="post" class="mr-1" action="Deleteloan">
                      <input type="hidden" name="idl" value="<?php echo $cl['idl'];?>">
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



        
    
              
            
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

