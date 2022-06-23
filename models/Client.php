<?php 

class Client
{
	static public function getAll()
	{
		$stmt = DB::connect()->prepare('SELECT * FROM client');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	
	}

	static public function getClient($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM client WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$client = $stmt->fetch(PDO::FETCH_OBJ);
			return $client;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
	static public function getClient1()
	{
		$stmt = DB::connect()->prepare('SELECT * FROM  client  WHERE username = :username');
		$stmt->execute(array(":username" => $_SESSION['username']));
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
    }
	


        /*$stmt = DB::connect()->prepare("SELECT * FROM  client  WHERE id=".$_GET['id'] );
		$stmt->execute(array(":username" => $_SESSION['username']));
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}*/

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO client (nom,prenom,Sexe,Nationalité,Etat_civil,email,Numtel,Salaire,Adresse,Datenaissance,photo,username)
			VALUES (:nom,:prenom,:sexe,:nationalite,:etatc,:email,:numtel,:salaire,:Adresse,:dn,:phto,:username)');
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':sexe',$data['Sexe']);
		$stmt->bindParam(':nationalite',$data['Nationalité']);
		$stmt->bindParam(':etatc',$data['Etat_civil']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':numtel',$data['Numtel']);
		$stmt->bindParam(':salaire',$data['Salaire']);
		$stmt->bindParam(':Adresse',$data['Adresse']);
		$stmt->bindParam(':dn',$data['Datenaissance']);
		$stmt->bindParam(':photo',$data['photo']);
		$stmt->bindParam(':username',$data['username']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

    static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE client SET nom= :nom,prenom=:prenom,Sexe=:sexe,Nationalité=:nationalite,Etat_civil=:etatc,email=:email,Numtel=:numtel,Salaire=:salaire, Adresse=:Adresse,Datenaissance=:dn , username=:username WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		$stmt->bindParam(':sexe',$data['Sexe']);
		$stmt->bindParam(':nationalite',$data['Nationalité']);
		$stmt->bindParam(':etatc',$data['Etat_civil']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':numtel',$data['Numtel']);
		$stmt->bindParam(':salaire',$data['Salaire']);
		$stmt->bindParam(':Adresse',$data['Adresse']);
		$stmt->bindParam(':dn',$data['Datenaissance']);
		$stmt->bindParam(':username',$data['username']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM client WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

    static public function searchClient($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM client WHERE nom LIKE ? OR prenom LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$client = $stmt->fetchAll();
			return $client;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
	

}