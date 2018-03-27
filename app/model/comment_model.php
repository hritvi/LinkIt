<?php
	namespace Model;
	class CommentModel
	{
		public static function time_sort($link_id){
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM comments WHERE link_id = ? ORDER BY time_created DESC");
			$stmt->execute([$link_id]);
			$row=$stmt->fetchAll();
			return $row; 
		}
		public static function vote_sort($link_id){
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM comments WHERE link_id = ? ORDER BY votes DESC");
			$stmt->execute([$link_id]);
			$row=$stmt->fetchAll();
			return $row; 
		}
		public static function insert($content,$link_id,$username)
		{
			$db = \DB::get_instance();
			$stmt=$db->prepare("INSERT INTO comments (content,link_id,username) VALUES (?,?,?) ");
			$stmt->execute([$content,$link_id,$username]);
			$stmt=null;
		}
	}