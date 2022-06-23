<?php 

class Manager{

	static public function loginmanager($data){
		$username = $data['username'];
		try{
			$query = 'SELECT * FROM manager WHERE username=:username';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":username" => $username));
			$manager = $stmt->fetch(PDO::FETCH_OBJ);
			return $manager;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function getAll()
	{
		$stmt = DB::connect()->prepare('SELECT * FROM manager');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	
	}

	static public function getManager($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM manager WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$manager = $stmt->fetch(PDO::FETCH_OBJ);
			return $manager;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function Addmanager($data)
	{
		$stmt = DB::connect()->prepare('INSERT INTO manager (nom,prenom,email,tel,username,password)
			VALUES (:nom,:prenom,:email,:tel,:username,:password)');
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':prenom',$data['prenom']);
		
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':tel',$data['tel']);
		
		$stmt->bindParam(':username',$data['username']);

		$stmt->bindParam(':password',$data['password']);
		

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

    static public function Updatemanager($data){
		$stmt = DB::connect()->prepare('UPDATE manager SET nom= :nom,prenom=:prenom,email=:email,tel=:tel,username=:username WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':nom',$data['nom']);
		
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':tel',$data['tel']);
		
		$stmt->bindParam(':username',$data['username']);
		$stmt->bindParam(':password',$data['password']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

static public function Deletemanager($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM manager WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

    static public function searchManager($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM manager WHERE nom LIKE ? OR prenom LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$manager = $stmt->fetchAll();
			return $manager;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

}