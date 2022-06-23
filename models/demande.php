<?php

Class demande{
	static public function createdemande($data)
{
 
          $query = 'SELECT * FROM client WHERE username=:username ';
		$result = DB::connect()->prepare($query);
		$result->execute(array(":username" => $_SESSION['username']));
		$user = $result->fetch(PDO::FETCH_OBJ);
		$stmt = DB::connect()->prepare('INSERT INTO demandecredit (typecredit,montantcredit,revenum,chargesm,datecr,id)
			VALUES (:typecredit,:montantcredit,:revenum,:chargesm ,:datecr,:id) ');
		$stmt->bindParam(':typecredit',$data['typecredit']);
		$stmt->bindParam(':montantcredit',$data['montantcredit']);
		$stmt->bindParam(':revenum',$data['revenum']);
		$stmt->bindParam(':chargesm',$data['chargesm']);
		$stmt->bindParam(':datecr',$data['datecr']);
		$stmt->bindParam(':id',$user->id);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

	static public function getAll()

	{
		/*$query = 'SELECT * FROM client WHERE username=:username ';
		$result = DB::connect()->prepare($query);
		$result->execute(array(":username" => $_SESSION['username']));
		$user = $result->fetch(PDO::FETCH_OBJ);
		$id=$user->id;*/
		$stmt = DB::connect()->prepare('SELECT * FROM (demandecredit JOIN client ON demandecredit.id = client.id)  WHERE username = :username');
		$stmt->execute(array(":username" => $_SESSION['username']));
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	
	}
	static public function getAlldemande()
	{
		$stmt = DB::connect()->prepare('SELECT * FROM demandecredit  WHERE etatcredit= "validée"');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getDemande($data){
		$idd = $data['idd'];
		try{
			$query = 'SELECT * FROM demandecredit WHERE idd=:idd';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idd" => $idd));
			$demande = $stmt->fetch(PDO::FETCH_OBJ);
			return $demande;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

  
	static public function addDemande($data){
		$stmt = DB::connect()->prepare('INSERT INTO demandecredit (typecredit, montantcredit, revenum,chargesm)
			VALUES (:typecredit, :montantcredit,:revenum,:chargesm)');
		$stmt->bindParam(':typecredit',$data['typecredit']);
		$stmt->bindParam(':montantcredit',$data['montantcredit']);
		$stmt->bindParam(':revenum',$data['revenum']);
		$stmt->bindParam(':chargesm',$data['chargesm']);
		

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

    static public function updateDemande($data){
		$stmt = DB::connect()->prepare('UPDATE demandecredit SET typecredit= :typecredit,montantcredit=:montantcredit, revenum=:revenum, chargesm=:chargesm WHERE idd=:idd');
		$stmt->bindParam(':idd',$data['idd']);
		$stmt->bindParam(':typecredit',$data['typecredit']);
		$stmt->bindParam(':montantcredit',$data['montantcredit']);
		$stmt->bindParam(':revenum',$data['revenum']);
		$stmt->bindParam(':chargesm',$data['chargesm']);
		
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

static public function deleteDemande($data){
		$idd = $data['idd'];
		try{
			$query = 'DELETE FROM demandecredit WHERE idd=:idd';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idd" => $idd));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

    static public function searchDemande($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM demandecredit WHERE montantcredit LIKE ? OR typecredit LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$Demande = $stmt->fetchAll();
			return $Demande;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function getAllapp()

	{
		$stmt = DB::connect()->prepare('SELECT * FROM demandecredit ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
}
     static public function updateetat($data)
     {
     	$stmt = DB::connect()->prepare('UPDATE demandecredit SET etatcredit= :etatcredit WHERE idd=:idd');
		$stmt->bindParam(':idd',$data['idd']);
		$stmt->bindParam(':etatcredit',$data['etatcredit']);
		
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

   static public function getAllapprovedloans()

	{
		$stmt = DB::connect()->prepare('SELECT * FROM (demandecredit JOIN client ON demandecredit.id = client.id)  WHERE username = :username and etatcredit="validée"');
		$stmt->execute(array(":username" => $_SESSION['username']));
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	
	}
	static public function getAllrejectedloans()

	{
		$stmt = DB::connect()->prepare('SELECT * FROM (demandecredit JOIN client ON demandecredit.id = client.id)  WHERE username = :username and etatcredit="refusée"');
		$stmt->execute(array(":username" => $_SESSION['username']));
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	
	}
     
   
}