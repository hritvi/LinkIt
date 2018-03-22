<?php
	namespace Model;
	class UserModel{
		public static function find($name){
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM users WHERE username = ?");
			$stmt->execute([$name]);
			$row=$stmt->fetch();
			return $row; 
		}
		public static function link($name){
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM links WHERE username = ?");
			$stmt->execute([$name]);
			$rows=$stmt->fetchAll();
			return $rows; 
		}
		public static function comments($name){
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM comments WHERE username = ?");
			$stmt->execute([$name]);
			$rows=$stmt->fetchAll();
			return $rows; 
		}
	}