<?php
	namespace Controller;
	class CommentVotesController
	{
		public function post()
		{
			$id=$_POST['commentid'];
			if(!isset($_SESSION["name"])){
				header("location: http://localhost:8000/signin");
			}
			else{
				$user_id=$_SESSION["user_id"];
				\Model\UpvoteModel::vote_comment($id,$user_id);
				header( "Refresh:0" );
			}
		}
	}