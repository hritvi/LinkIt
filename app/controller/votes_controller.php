<?php
	namespace Controller;
	class VotesController
	{
		public function get($id)
		{
			if(!isset($_SESSION["name"])){
				$links=\Model\LinkModel::trending();
				echo \View\Loader::make()->render('templates/index.twig',array('links' => $links));
				header("location: http://localhost:8000/signin");
			}
			else{
				$user_id=$_SESSION["user_id"];
				\Model\UpvoteModel::vote($id,$user_id);
				header("location: http://localhost:8000/");
			}
		}
	}