<?php
	namespace Model;
	class UpvoteModel{
		public function check($link_id,$user_id){
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM votes WHERE link_id = ? and user_id= ? ");
			$stmt->execute([$link_id,$user_id]);
			$row=$stmt->fetch();
			if(!empty($row)){
				return true;
			}
			else{
				return false;
			}
		}
		public function vote($link_id,$user_id){
			$db = \DB::get_instance();
			$stmt=$db->prepare("SELECT * FROM links WHERE id = ? ");
			$stmt->execute([$link_id]);
			$row=$stmt->fetch();
			$votes=$row['votes'];
			$voted=self::check($link_id,$user_id);
			if($voted){
				$votes--;
				$stmt4=$db->prepare("DELETE FROM votes WHERE user_id = ? and link_id = ?");
				$stmt4->execute([$user_id,$link_id]);
				$stmt4=null;
			}
			else{
				$votes++;
				$stmt2=$db->prepare("INSERT INTO votes (user_id,link_id) VALUES (? ,?)");
				$stmt2->execute([$user_id,$link_id]);
				$stmt2=null;
			}
			$stmt3=$db->prepare("UPDATE links SET votes = ? WHERE id = ?");
			$stmt3->execute([$votes,$link_id]);
			$stmt3=null;
		}
	}
