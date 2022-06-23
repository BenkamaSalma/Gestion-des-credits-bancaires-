<?php 
class ManagerController {

public function authmanager()
{
		if(isset($_POST['submit'])){
			$data['username'] = $_POST['username'];
			$result = Manager::loginmanager($data);
			if($result->username === $_POST['username'] && password_verify($_POST['password'],$result->password)){

				$_SESSION['logged'] = true;
				$_SESSION['username'] = $result->username;
				Redirect::to('managerpage');

			}else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('loginmanager');
			}
		}
}
public function getAllManager(){
		$manager= Manager::getAll();
		return  $manager;
	}

	public function getOnemanager(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$manager = Manager::getManager($data);
			return $manager;
		}
	}
	public function findManager(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$manager= Manager::searchManager($data);
		return $anager;
	} 


	public function addManager(){
		if(isset($_POST['submit'])){
			$options = [
				'cost' => 12
			];
			$password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
			$data = array(
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'email' => $_POST['email'],
				'tel' => $_POST['tel'],
				'username' => $_POST['username'],
				'password' => $password,
			);
			$result = Manager::Addmanager($data);
			if($result === 'ok'){
				Session::set('success','Manager Ajouté');
				Redirect::to('managers');
			}else{
				echo $result;
			}
		}
	}

	public function updateManager(){
		if(isset($_POST['submit'])){
			$options = [
				'cost' => 12
			];
			$password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'email' => $_POST['email'],

				'tel' => $_POST['tel'],
				'username' => $_POST['username'],
				'password' => $password,
			);
			$result = Manager::Updatemanager($data);
			if($result === 'ok'){
				Session::set('success','Manager Modifié');
				Redirect::to('managers');
			}else{
				echo $result;
			}
		}
	}
	public function deleteManager(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Manager::Deletemanager($data);
			if($result === 'ok'){
				Session::set('success','Manager Supprimé');
				Redirect::to('managers');
			}else{
				echo $result;
			}
		}
	}
}