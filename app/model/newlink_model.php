<?php
	namespace Model;
	class NewLinkModel{
		public static function all()
		{
			$db = \DB::get_instance();
			$stmt = $db->prepare("SELECT * FROM links ORDER BY time_created DESC");
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
	}