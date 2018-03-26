<?php
	namespace Controller;
	class SignUpController
	{
		public function get()
		{
			echo \View\Loader::make()->render('templates/sign_up.twig');
		}
		public function post()
		{
			//create new model and save it in db
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$username=$_POST['user'];
			$email_id=$_POST['email'];
			$password=$_POST['password'];
			\Model\SignModel::insert($fname,$lname,$username,$email_id,$password);
			$row=\Model\SignModel::find($username,$password);
			$_SESSION["user_id"]=$row['user_id'];
			$_SESSION["name"]=$row['username'];
			if(isset($_SESSION["name"])){
				header('Location: /');
			}
		}
	}