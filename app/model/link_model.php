<?php
	namespace Model;
	class LinkModel{
		public static function all()
		{
			$db = \DB::get_instance();
			$stmt = $db->prepare("SELECT * FROM links");
			$stmt->execute();
			$rows=$stmt->fetchAll();
			return $rows;
		}
		public static function insert($title,$url,$username)
		{
			$db = \DB::get_instance();
			$stmt=$db->prepare("INSERT INTO links (title,url,username) VALUES (?,?,?)");
			$stmt->execute([$title,$url,$username]);
			$stmt=null;
		}
		public static function find($id)
		{
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM links WHERE id = ?");
			$stmt->execute([$id]);
			$row=$stmt->fetch();
			return $row; 
		}

	}