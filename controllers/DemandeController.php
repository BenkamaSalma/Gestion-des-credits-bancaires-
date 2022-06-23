<?php 
class DemandeController
{

    public function create(){

		if(isset($_POST['submit'])){

			$data = array(
                'typecredit' => $_POST['typecredit'],
				'montantcredit' => $_POST['montantcredit'],
				'revenum' => $_POST['revenum'],
				'chargesm' => $_POST['chargesm'],
				'datecr'=> date('y-m-d h:i:s'),
			);
			$result = demande::createDemande($data);
			if($result === 'ok'){
				Session::set('success','Demande crée');
				Redirect::to('clientpage');
			}else{
				echo $result;
			}
		}
	}


	public function getAllDemande(){
		$demande= demande::getAll();
		return  $demande;
	}
	public function getAlldemande1(){
		$demande= demande::getAlldemande();
		return  $demande;
	}
	

	public function getAllApplications()
	{
		$demande= demande::getAllapp();
		return  $demande;
	}

	public function getAllApprovedloans(){
		$demande= demande::getAllapprovedloans();
		return  $demande;
	}
	public function getAllRejectedloans(){
		$demande= demande::getAllrejectedloans();
		return  $demande;
	}





	public function getOneDemande(){
		if(isset($_POST['idd'])){
			$data = array(
				'idd' => $_POST['idd']
			);
			$type = demande::getDemande($data);
			return $type;
		}
	}
	public function findDemande(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$type = demande::searchDemande($data);
		return $type;
	} 


	public function addDemande(){
		if(isset($_POST['submit'])){
			$data = array(
				'typecredit' => $_POST['typecredit'],
				'montantcredit' => $_POST['montantcredit'],
				'revenum' => $_POST['revenum'],
				'chargesm' => $_POST['chargesm'],
			);
			$result =demande::addDemande($data);
			if($result === 'ok'){
				Session::set('success','Demande Ajoutée');
				Redirect::to('demande');
			}else{
				echo $result;
			}
		}
	}

	public function updateDemande(){
		if(isset($_POST['submit'])){
			$data = array(
				'idd' => $_POST['idd'],
				'typecredit' => $_POST['typecredit'],
				'montantcredit' => $_POST['montantcredit'],
				'revenum' => $_POST['revenum'],
				'chargesm' => $_POST['chargesm'],
				
				
			);
			$result = demande::updateDemande($data);
			if($result === 'ok'){
				Session::set('success','Demande Modifiée');
				Redirect::to('demande');
			}else{
				echo $result;
			}
		}
	}
	public function deleteDemande(){
		if(isset($_POST['idd'])){
			$data['idd'] = $_POST['idl'];
			$result = demande::deleteDemande($data);
			if($result === 'ok'){
				Session::set('success','Demande Supprimée');
				Redirect::to('demande');
			}else{
				echo $result;
			}
		}
	}
	public function Updateetat(){
		if(isset($_POST['submit'])){
			$data = array(
				'idd' => $_POST['idd'],
				'etatcredit' => $_POST['etatcredit'],
				
			);
			$result = demande::updateetat($data);
			if($result === 'ok'){
				Session::set('success','Etat Modifiée');
				Redirect::to('applications');
			}else{
				echo $result;
			}
		}
	}


}