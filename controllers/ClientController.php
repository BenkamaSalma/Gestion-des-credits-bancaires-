<?php 
class ClientController
{
	public function getAllClient(){
		$client= client::getAll();
		return  $client;
	}

	public function getOneClient(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$client = client::getClient($data);
			return $client;
		}
	}

	public function getOneClient1(){
		$client = client::getClient1();
		return $client;
		
	}
	public function findClient(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$client = client::searchClient($data);
		return $client;
	} 


	public function addClient(){
		if(isset($_POST['submit'])){
			$data = array(
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'Sexe' => $_POST['sexe'],
				'Nationalité' => $_POST['nationalite'],
				'Etat_civil' => $_POST['etatc'],
				'email' => $_POST['email'],

				'Numtel' => $_POST['numtel'],
				'Salaire' => $_POST['salaire'],
				'Adresse' => $_POST['Adresse'],
				'Datenaissance' => $_POST['dn'],
				'photo' => $_POST['photo'],
				'username' => $_POST['username'],
			);
			$result = client::add($data);
			if($result === 'ok'){
				Session::set('success','client Ajouté');
				Redirect::to('client');
			}else{
				echo $result;
			}
		}
	}

	public function updateClient(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'Sexe' => $_POST['sexe'],
				'Nationalité' => $_POST['nationalite'],
				'Etat_civil' => $_POST['etatc'],
				'email' => $_POST['email'],

				'Numtel' => $_POST['numtel'],
				'Salaire' => $_POST['salaire'],
				'Adresse' => $_POST['Adresse'],
				'Datenaissance' => $_POST['dn'],
				'photo' => $_POST['photo'],
				'username' => $_POST['username'],
			);
			$result = client::update($data);
			if($result === 'ok'){
				Session::set('success','Client Modifié');
				Redirect::to('profile');
			}else{
				echo $result;
			}
		}
	}
	public function deleteClient(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = client::delete($data);
			if($result === 'ok'){
				Session::set('success','Client Supprimé');
				Redirect::to('client');
			}else{
				echo $result;
			}
		}
	}

	function forgot_password(){
		if (isset($_POST['email'])) {
			$password = uniqid();
			//echo $password;
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            ini_set("SMTP","ssl://smtp.gmail.com");
            ini_set("smtp_port","465");
            ini_set("sendmail_from", "bouhtilrania@gmail.com");
            
            $email=$_POST['email'];
            //echo $email;
            $subject = 'Mot de passe oublié';
            $message = "Bonjour, voici votre nouveau mot de passe : $password";
            /*$headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";*/

// More headers. From is required, rest other headers are optional
            $headers = "From: bouhtilrania@gmail.com";
            //$headers .= 'Cc: sales@example.com' . "\r\n";

            if (mail($email, $subject, $message, $headers)) {
            	$stmt =  DB::connect()->prepare("UPDATE client SET password = ? WHERE email = ?");
                $stmt->execute([$hashedPassword, $_POST['email']]);
                echo "E-mail envoyé";
            } 
            else {
            	echo "Une erreur est survenue";
    }
}
}
static public function upload(){
		if (isset($_POST['submit'])){
        $maxsize=500000;
        $validExt=array('.jpg ', '.gif' , '.png' , '.jpeg' , '.pdf' );
        if ($_FILES['upload_file']['error']>0)
        {
            echo "une erreur est survenu lors du transfert ";
            die;
        }
        $filesize=$_FILES['upload_file']['size'];
        if ($filesize> $maxsize)
        {
            echo "le fichier est trop gros!";
            die;
        }  
        $filename=$_FILES['upload_file']['name'];
        $fileExt= "." . strtolower(substr(strrchr($_FILES['upload_file']['name'],'.'),1));
        if(!in_array($fileExt,$validExt)){
            echo "le fichier n est pas une image ni un pdf";
        }
        $tmpName=$_FILES['upload_file']['tmp_name'];
        /*$uniqueName=md5(uniqid(rand(),true));*/
        $fileName="views/upload/".$filename;
		if(move_uploaded_file($tmpName, $fileName)){
			$query = 'SELECT * FROM client WHERE username=:username ';
		    $result = DB::connect()->prepare($query);
		    $result->execute(array(":username" => $_SESSION['username']));
		    $user = $result->fetch(PDO::FETCH_OBJ);
			$myRequest = DB::connect()->prepare('INSERT INTO document (nomdoc,datedepot,fileurl,id) VALUES (:nomdoc,:datedepot,:fileurl,:id)');
            $reslt=$myRequest->execute(array(":nomdoc" => $filename, ":datedepot"=>date("y-m-d h:i:s"),":fileurl"=>$fileName ,":id"=>$user->id));
        
            if($reslt)
            {
            echo "transfert términé";
            }
            Redirect::to('clientpage');
        }
    }


 }
 static public function docuploaded(){
 	$stmt = DB::connect()->prepare('SELECT * FROM (document JOIN client ON document.id = client.id)  WHERE username = :username');
	$stmt->execute(array(":username" => $_SESSION['username']));
	return $stmt->fetchAll();
	$stmt->close();
	$stmt = null;
	
	}
	static public function getdoc(){
		$id = $_POST['id'];
		$query = 'SELECT * FROM document WHERE id=:id';
		$stmt = DB::connect()->prepare($query);
		$stmt->execute(array(":id" => $id));
		return  $stmt->fetchAll();
		  
		$stmt->close();
		$stmt = null;
		
	}

}
