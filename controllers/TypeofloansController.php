<?php 
class TypeofloansController
{
	public function getAllLoans(){
		$type= Typeofloans::getAll();
		return  $type;
	}

	public function getOneLoan(){
		if(isset($_POST['idl'])){
			$data = array(
				'idl' => $_POST['idl']
			);
			$type = Typeofloans::getLoan($data);
			return $type;
		}
	}
	public function findLoan(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$type = Typeofloans::searchLoan($data);
		return $type;
	} 


	public function addLoan(){
		if(isset($_POST['submit'])){


			$data = array(
				'loanType' => $_POST['loanType'],
				'description' => $_POST['description'],
				'montant' => $_POST['montant'],
				'periode' => $_POST['periode'],
				
				
				
			);
			$result = Typeofloans::addloan($data);
			if($result === 'ok'){
				Session::set('success','Loan Ajouté');
				Redirect::to('loans');
			}else{
				echo $result;
			}
		}
	}

	public function updateLoan(){
		if(isset($_POST['submit'])){
			$data = array(
				'idl' => $_POST['idl'],
				'loanType' => $_POST['loanType'],
				'description' => $_POST['description'],
				'montant' => $_POST['montant'],
				'periode' => $_POST['periode'],
				
			);
			$result = Typeofloans::updateloan($data);
			if($result === 'ok'){
				Session::set('success','Loan Modifié');
				Redirect::to('loans');
			}else{
				echo $result;
			}
		}
	}
	public function deleteLoan(){
		if(isset($_POST['idl'])){
			$data['idl'] = $_POST['idl'];
			$result = Typeofloans::deleteloan($data);
			if($result === 'ok'){
				Session::set('success','Loan Supprimé');
				Redirect::to('loans');
			}else{
				echo $result;
			}
		}
	}












}