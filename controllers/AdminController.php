<?php 
class AdminController
{
	public function Adminauth(){
		if(isset($_POST['submit'])){
			//$data['username'] = $_POST['username'];
			//$result =Admin::Adminlogin($data);
			if( $_POST['username']== 'admin' && $_POST['password']=='admin'){

				$_SESSION['logged'] = true;
				$_SESSION['username'] = 'admin';
				Redirect::to('test');

			}else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('loginadmin');
			}
		}
	}
}