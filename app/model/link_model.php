<?php
	namespace Model;
	class LinkModel{
		public static function trending()
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
		public static function votes_sort()
		{
			$db = \DB::get_instance();
			$stmt = $db->prepare("SELECT * FROM links ORDER BY votes DESC");
			$stmt->execute();
			$rows=$stmt->fetchAll();
			return $rows;
		}
		public static function time_sort()
		{
			$db = \DB::get_instance();
			$stmt = $db->prepare("SELECT * FROM links ORDER BY time_created DESC");
			$stmt->execute();
			$rows=$stmt->fetchAll();
			return $rows;
		}
	}