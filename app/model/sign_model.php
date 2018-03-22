<?php
	namespace Model;
	class SignModel{
		public static function insert($fname,$lname,$user,$email,$password)
		{
			$db = \DB::get_instance();
			$stmt=$db->prepare("INSERT INTO users (fname,lname,username,email,password) VALUES (?,?,?,?,?)");
			$stmt->execute([$fname,$lname,$user,$email,$password]);
			$stmt=null;
		}
		public static function find($user,$password)
		{
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM users WHERE username = ? and password = ?");
			$stmt->execute([$user,$password]);
			$row=$stmt->fetch();
			$_SESSION['name']=$row['username'];
			$_SESSION['user_id']=$row['user_id'];
			return $row;
		}
	}		