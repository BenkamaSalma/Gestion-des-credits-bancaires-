<?php 

class User{

	static public function login($data){
		$id= $data['id'];
		$username = $data['username'];
		try{
			$query = 'SELECT * FROM client WHERE username=:username';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":username" => $username));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}


static public function createUser($data)
{
	$stmt = DB::connect()->prepare('INSERT INTO client (nom,prenom,cin,Sexe,Nationalité,Etat_civil,email,Numtel,Salaire,Adresse,Datenaissance,username,password,numerodecompte) VALUES (:nom,:prenom,:cin,:sexe,:nationalite,:etatc,:email,:numtel,:salaire,:Adresse,:dn,:username,:password,:numerodecompte)');
	$stmt->bindParam(':nom',$data['nom']);
	$stmt->bindParam(':prenom',$data['prenom']);
	$stmt->bindParam(':cin',$data['cin']);
	$stmt->bindParam(':sexe',$data['Sexe']);
	$stmt->bindParam(':nationalite',$data['Nationalité']);
	$stmt->bindParam(':etatc',$data['Etat_civil']);
	$stmt->bindParam(':email',$data['email']);
	$stmt->bindParam(':numtel',$data['Numtel']);
	$stmt->bindParam(':salaire',$data['Salaire']);
	$stmt->bindParam(':Adresse',$data['Adresse']);
	$stmt->bindParam(':dn',$data['Datenaissance']);
	$stmt->bindParam(':username',$data['username']);
	$stmt->bindParam(':password',$data['password']);
	$stmt->bindParam(':numerodecompte',$data['numerodecompte']);
    if($stmt->execute())
    {
		return 'ok';
	}
	else{
		return 'error';
		}
	$stmt->close();
	$stmt = null;
	}

}