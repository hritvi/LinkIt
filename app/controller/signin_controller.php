<?php
	namespace Controller;
	class SignInController
	{
		public function get()
		{
			echo \View\Loader::make()->render('templates/sign_in.twig');
		}
		public function post()
		{
			//create new model and save it in db
			$username=$_POST['user'];
			$password=$_POST['password'];
			$row=\Model\SignModel::find($username,$password);
			echo \View\Loader::make()->render('templates/sign_in.twig');
			$_SESSION["name"]=$row['username'];
			$_SESSION["user_id"]=$row['user_id'];
			if(isset($_SESSION["name"])){
				header('Location: /');
			}
			else{
				echo "Invalid username or password";
			}
		}
	}