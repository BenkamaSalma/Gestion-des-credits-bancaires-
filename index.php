<?php

require_once './autoload.php';
require_once'./controllers/HomeController.php'; 
$home= new HomeController();

$pages = ['home','Add','Update','Delete','Logout','choicelogin','signup','client', 'login','loginmanager','managers','Addmanager','Deletemanager','Updatemanager','loginadmin','adminpage','loans','Addloan','Deleteloan','Updateloan','demandecredit','clientpage','demande','adddemande','applications','Updateetat','approvedloans','rejectedloans','profile','profileclient','credit','sim','creditperso','creditauto','creditetu','creditimmobilier','addpaiement','demandeaccepte','Onepaiement','forgottenpass','upload','docuploaded','admindocuploaded','test'];
if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pages)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('views/includes/404.php');
		}
	}else{
		$home->index('home');
	}


 
?>

