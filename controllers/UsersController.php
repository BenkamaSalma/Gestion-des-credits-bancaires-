<?php 
class UsersController {

public function auth(){
		if(isset($_POST['submit'])){
			$data['username'] = $_POST['username'];
			$result = User::login($data);
			if($result->username === $_POST['username'] && password_verify($_POST['password'],$result->password)){

				$_SESSION['logged'] = true;
				$_SESSION['username'] = $result->username;
				
				
				Redirect::to('clientpage');

			}else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('login');
			}
		}
	}

	public function register(){
		if(isset($_POST['submit'])){
			$options = [
				'cost' => 12
			];
			$password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
			$data = array(
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'cin' => $_POST['cin'],
				'Sexe' => $_POST['sexe'],
				'Nationalité' => $_POST['nationalite'],
				'Etat_civil' => $_POST['etatc'],
				'email' => $_POST['email'],
				'Numtel' => $_POST['numtel'],
				'Salaire' => $_POST['salaire'],
				'Adresse' => $_POST['Adresse'],
				'Datenaissance' => $_POST['dn'],
				'username' => $_POST['username'],
				'password' => $password,
				'numerodecompte' => $_POST['numerodecompte'],
			);
			$request= 'SELECT * FROM client WHERE username=:username ';
		    $reslt = DB::connect()->prepare($request);
		    $reslt->execute(array(":username" => $data['username']));
		    $count = $reslt->rowCount();
			if ($count > 0) 
			{ 
  	            $name_error = "Sorry... username already taken. TRY ANOTHER USERNAME";
  	            echo $name_error;
  	        }
			else{
				$result = User::createUser($data);
			    if($result === 'ok'){
				    Session::set('success','Compte crée');
				    Redirect::to('login');
			    }
			    else{
				    echo $result;
			    }
		    }
		}
	}

	static public function logout(){
		session_destroy();
	}
	


}