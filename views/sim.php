<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simulateur</title>
    <link rel="stylesheet"  href="http://127.0.0.1/final/public/assets/sim.css">
</head>
<body>
<div id="sideNav">
     <nav>
     <ul>
        <li><a href="home">HOME</a></li>
        <li><a href="about">ABOUT</a></li>
        <li><a href="contact">CONTACT</a></li>
        <li><a href="signup">SIGNUP</a></li>
        <li><a href="choicelogin">LOGIN</a></li>
    </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="images/menu.png" id="menu">
</div>
<div id="simulateur">
    <div class="simulateur_img">
        

            <p>
                <strong><font size="25">Besoin d'un crédit, <br />
Faites vos simulations <br />avant de vous engager</font></strong>
            </p>
        </div>


    </div>

<div class="white_block_content  content_simulateur">
    <h3>Faites votre simulation</h3>

    <div class="simulator_wrapper">
        <div class="simulator_block">
            <form  method="post">
                
                
                    <div class="simulator_val_control">
                        <label >
                            Montant du prêt(MAD)
                        </label>
                        <input type="number"  name ="montant"class="simple_field simulator_controll testFormat" >
                       
                    </div>
                   
                
                <div class="simulator_item mb_40 clearfix">
                    
                    <div class="simulator_val_control">
                        <label >
                           Taux d'interêt(%)
                        </label>
                        <input type="number" step="0.001" name ="taux" class="simple_field simulator_controll"  required>
                        
                    </div>

                    
                </div>
                <div class="simulator_item mb_40 clearfix">
                   
                    <div class="simulator_val_control">
                        <label >
                            Durée du prêt(ans)
                        </label>
                        <input type="number" name="duree" class="simple_field simulator_controll timeFormat"  required>
                        
                    </div>
                    
                </div>

                <button class="btnn" type="submit " name ="submit">Calculez</button>
                <button class='btnn'><a href='login'> Login pour demander un crédit</a></button>
      
</body>
</html>
<script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")
    sideNav.style.right ="-250px"; 
    menuBtn.onclick = function(){
        if(sideNav.style.right == "-250px"){
            sideNav.style.right = "0";
            menu.src = "public/assets/close.png";
        }
        else{
            sideNav.style.right = "-250px";
            menu.src ="public/assets/menu.png";
        }
    }
</script>

<?php 
// declaring variables
if (isset($_POST['submit'])){
 $interest="";
 $total_interest="";
 $total_amount="";
 
 $mensualité="";

 

 //if someone click on the button what happens
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
        <br>
        <br>
        <br><br><br>
        <br>
        <br>
        <br>
       <h1>Résultat de votre simulation</h1>
       <div class='border-wrap'>
           <div class='inner-border-wrap'>
             <div class='inner-wrap'>
                <div class='alert alert-success' role='alert' >
                <h2> the interest is : $interest </h2><br>
                <h2> the total interest is : $total_interest </h2><br>
                <h2> the total amount is : $total_amount </h2><br>
                <h2> la mensualité est  : $mensualité </h2><br>
                </div>
            </div>

        </div>";
    
     }
 

 }
?>






