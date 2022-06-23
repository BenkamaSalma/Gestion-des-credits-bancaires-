<?php 

class Typeofloans
{
	static public function getAll()
	{
		$stmt = DB::connect()->prepare('SELECT * FROM loantypes');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	
	}

	static public function getloan($data){
		$idl = $data['idl'];
		try{
			$query = 'SELECT * FROM loantypes WHERE idl=:idl';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idl" => $idl));
			$loan = $stmt->fetch(PDO::FETCH_OBJ);
			return $loan;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function addloan($data){
		$stmt = DB::connect()->prepare('INSERT INTO loantypes (loanType,description,montant,periode)
			VALUES (:loanType,:description,:montant,:periode)');
		$stmt->bindParam(':loanType',$data['loanType']);
		$stmt->bindParam(':description',$data['description']);
		$stmt->bindParam(':montant',$data['montant']);
		$stmt->bindParam(':periode',$data['periode']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

    static public function updateloan($data){
		$stmt = DB::connect()->prepare('UPDATE loantypes SET loanType= :loanType,description=:description,montant=:montant,periode=:periode');
		$stmt->bindParam(':loanType',$data['loanType']);
		$stmt->bindParam(':description',$data['description']);
		$stmt->bindParam(':montant',$data['montant']);
		$stmt->bindParam(':periode',$data['periode']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

static public function deleteloan($data){
		$idl = $data['idl'];
		try{
			$query = 'DELETE FROM loantypes WHERE idl=:idl';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idl" => $idl));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

    static public function searchloan($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM loantypes WHERE nom LIKE ? OR prenom LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$loan = $stmt->fetchAll();
			return $loan;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

}