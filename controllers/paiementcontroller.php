<?php 
class paiementcontroller
{
	public function getAllClient(){
		$paiement= paiement::getAll();
		return  $paiement;
	}

	public function getOnepaiement(){
		if(isset($_POST['idd'])){
			$data = array(
				'idd' => $_POST['idd']
			);
			$paiement = paiement::getpaiement($data);
			return $paiement;
		}
	}

	/*public function getOneClient1(){
		$client = client::getClient1();
		return $client;
		
	}*/
	public function findpaiement(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$paiement = paiement::searchpaiement($data);
		return $paiement;
	} 


	public function addpaiement(){
		if(isset($_POST['submit'])&& isset($_POST['idd'])){
			$data = array(
				'montantapaye' => $_POST['montantapaye'],
				'datepaiement' => date('d-m-y h:i:s'),
				'idd' => $_POST['idd'],
				
			);
			$result = paiement::addpaiement($data);
			if($result === 'ok'){
				Session::set('success','Paiement Ajouté');
				Redirect::to('paiement');
			}else{
				echo $result;
			}
		}
	}

	public function updatepaiement(){
		if(isset($_POST['submit'])){
			$data = array(
				'idp' => $_POST['idp'],
				'montantapaye' => $_POST['montantapaye'],
				'datepaiement' => $_POST['datepaiement'],
				'idd' => $_POST['idd'],
			
			);
			$result = paiement::updatepaiement($data);
			if($result === 'ok'){
				Session::set('success','Paiement Modifié');
				Redirect::to('paiement');
			}else{
				echo $result;
			}
		}
	}
	public function deletepaiement(){
		if(isset($_POST['idp'])){
			$data['idp'] = $_POST['idp'];
			$result = paiement::deletepaiement($data);
			if($result === 'ok'){
				Session::set('success','Paiement Supprimé');
				Redirect::to('paiement');
			}else{
				echo $result;
			}
		}
	}


}