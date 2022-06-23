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
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>les crédits</title>
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/profile.css">
</head>
<body>


<div class="card">
<?php foreach($loan as $cl):?>
  <div class="title"> <?php echo $cl['loanType']; ?></div>

  <div class="icon">
   
  </div><!--/icon-->
 
  <div class="features">
    <ul>
      <li><span><style color =black > </style>Type du crédit : </span> <?php echo $cl['loanType']; ?></li>
      <li><span>Description : </span> <?php echo $cl['description'];?></li>
      <li><span>montant : </span><?php echo $cl['montant'];?></li>
      <li><span>Période</span> <?php echo $cl['periode'];?></li>
    </ul>
  </div><!--/features-->

  <a href="#" class="btn">Check it out</a>
<?php endforeach;?>


</body>
</html>