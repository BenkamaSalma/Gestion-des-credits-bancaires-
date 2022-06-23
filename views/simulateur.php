<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Simulateur</title>
		</head>
		<body>
		
		</body>
		</html>		

				<h1 class="titre-simul">Simulateur</h1>
								
					<div class="col-md-7 display-mobile-after">
								
							

<div class="col-md-12 frm-calculator">


<form  method="post">


<div class="form-group">
<label for="dCapital" class="intitule"><span class="obligatoire">*</span> Montant du prêt</label>
<input type="number" required name="montant"  value="" class="form-control" min="0" step="1000"><span class="unite">Dhs</span>

</div>
<div class="form-group">
<label for="Taux" class="intitule"><span class="obligatoire">*</span> Taux d'interêt</label>
<input type="number" step="0.001" name="taux" id="dTaux"   class="form-control"><span class="unite">%</span>
</div>




<div class="form-group">
<label for="iDuree" class="intitule"><span class="obligatoire">*</span> Durée du prêt</label>
<select name="duree" class="form-control">
<option value="1" >1 an</option>
<option value="2" >2 ans</option>
<option value="3" >3 ans</option>
<option value="4" >4 ans</option>
<option value="5" >5 ans</option>
<option value="6" >6 ans</option>
<option value="7" >7 ans</option>
<option value="8" >8 ans</option>
<option value="9" >9 ans</option>
<option value="10" >10 ans</option>
<option value="11" >11 ans</option>
<option value="12" >12 ans</option>
<option value="13" >13 ans</option>
<option value="14" >14 ans</option>
<option value="15" >15 ans</option>
<option value="16" >16 ans</option>
<option value="17" >17 ans</option>
<option value="18" >18 ans</option>
<option value="19" >19 ans</option>
<option value="20"  >20 ans</option>
<option value="21" >21 ans</option>
<option value="22" >22 ans</option>
<option value="23" >23 ans</option>
<option value="24" >24 ans</option>
<option value="25" >25 ans</option>

</select>
<br>
<div class=" select-duree ">
<input name="type_duree" id="mensuel" value="mensuel" type="radio" required>
<label class="opt_label" for="mensuel">mois</label>
 
<input name="type_duree" id="annuel" checked="checked" value="annuel" type="radio" required>
 <label class="opt_label" for="annuel" id="opt_annuel">années</label>
</div>
</div>

<div class="form-group">
<label class="intitule"></label>
<button type="submit " name ="submit" class="form-control btn btn-primary">Calculez</button></div>
<div class="form-group">
<label class="intitule-sm champs-obligatoire">* : Champs obligatoires</label>
</div></form>
</body>
</html>	
<?php 
// declaring variables
 $interest="";
 $total_interest="";
 $total_amount="";
 $return_funds_per_months="";
 $mensualité="";

 

 //if someone click on the button what happens
if (isset($_POST['submit'])){
	$amount=$_POST['montant'];
 	$rate=$_POST['taux'];
    $duree=$_POST['duree'];

    $interest=$rate/100*$amount;
    $total_interest=$rate/100*$amount*$duree*12;
    $mensualité=($amount*$rate/100*pow((1+$rate/100),($duree*12)))/(pow((1+$rate/100),($duree*12))-1);
    $total_amount=$amount+$total_interest;
    $mensualité=($amount*$rate/100*pow((1+$rate/100),($duree*12)))/(pow((1+$rate/100),($duree*12))-1);
    if ($interest && $total_interest && $total_amount && $mensualité)
    {
    	echo "
    	<div class='alert alert-success' role='alert' >
    	<h1> the interest is : $interest </h1><br>
    	<h1> the total interest is : $total_interest </h1><br>
    	<h1> the total amount is : $total_amount </h1><br>
    	<h1> la mensualité est  : $mensualité </h1><br>";
    
     }
    
 

 }
?>