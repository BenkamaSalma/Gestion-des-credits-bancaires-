<?php
  if(isset($_POST['find'])){
    $data = new ClientController();
    $client = $data->findClient();
  }else{
    $data = new ClientController();
    $client = $data->getOneClient1();
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Mon profile</h2>

<div class="card">
    <?php foreach($client as $cl):?>
  <img src="http://127.0.0.1/final/public/user.png" height="100px" width="100px">
   
  <h1><?php echo $cl['nom']; echo  $cl['prenom']?></h1>
  <p>Email:<?php echo $cl['email']?></p>
  <p class="title"> Etat civile: <?php echo $cl['Etat_civil']?> </p>
  <p class="title"> Nationalité: <?php  echo $cl['Nationalité']?> </p>
  <p class="title"> Numéro de téléphone: <?php echo $cl['Numtel']?> </p>
  <p class="title"> Adresse: <?php echo $cl['Adresse']?> </p>
  <p class="title"> Date de naissance: <?php echo $cl['Datenaissance']?> </p>
  <p class="title"> Salaire: <?php echo $cl['Salaire']?> </p>
  
 <form method="post" class="mr-1" action="Update">
 <input type="hidden" name="id" value="<?php echo $cl['id'];?>">
  <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
   </form>
  <?php endforeach;?>
</div>

</body>
</html>
