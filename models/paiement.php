<?php 

class paiement
{
	static public function getAll()
	{
		$stmt = DB::connect()->prepare('SELECT * FROM paiements');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	
	}

	static public function getpaiement($data){
		$idd = $data['idd'];
		
			$query = 'SELECT * FROM paiements WHERE idd=:idd';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idd" => $idd));
			return $stmt->fetchAll();
		     $stmt->close();
		     $stmt = null;
	}

	static public function addpaiement($data){
		
		$stmt = DB::connect()->prepare('INSERT INTO paiements (montantapaye,datepaiement,idd)
			VALUES (:montantapaye,:datepaiement,:idd)');
		$stmt->bindParam(':montantapaye',$data['montantapaye']);
		$stmt->bindParam(':datepaiement',$data['datepaiement']);
		$stmt->bindParam(':idd',$data['idd']);
          if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

    static public function updatepaiement($data){
		$stmt = DB::connect()->prepare('UPDATE paiements SET montantapaye= :montantapaye,datepaiement=:datepaiement,idd=:idd');
		$stmt->bindParam(':montantapaye',$data['montantapaye']);
		$stmt->bindParam(':datepaiement',$data['datepaiement']);
		$stmt->bindParam(':idd',$data['idd']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

static public function deletepaiement($data){
		$idd = $data['idd'];
		try{
			$query = 'DELETE FROM paiements WHERE idd=:idd';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idd" => $idd));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

    static public function searchpaiement($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM paiements WHERE montantapaye LIKE ? OR datepaiement LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$paiement = $stmt->fetchAll();
			return $paiement;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

}