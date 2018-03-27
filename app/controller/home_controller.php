<?php
	namespace Controller;
	class HomeController
	{		
		public function get()
		{
			if(isset($_SESSION["name"])){
				$trending_links=\Model\LinkModel::trending();
				$votes_links=\Model\LinkModel::votes_sort();
				$time_links=\Model\LinkModel::time_sort();
				$username=$_SESSION["name"];
				echo \View\Loader::make()->render('templates/home.twig',array('trending_links' => $trending_links,'vote_links' => $votes_links,'time_links' => $time_links,'user' => $username));
			}
			else{
				$trending_links=\Model\LinkModel::trending();
				$votes_links=\Model\LinkModel::votes_sort();
				$time_links=\Model\LinkModel::time_sort();
				echo \View\Loader::make()->render('templates/index.twig',array('trending_links' => $trending_links,'vote_links' => $votes_links,'time_links' => $time_links));
			}
		}
		public function post()
		{
			//create new model and save it in db
			$trending_links=\Model\LinkModel::trending();
			$votes_links=\Model\LinkModel::votes_sort();
			$time_links=\Model\LinkModel::time_sort();
			if(isset($_SESSION["name"])){
				$username=$_SESSION["name"];
				echo \View\Loader::make()->render('templates/home.twig',array('trending_links' => $trending_links,'vote_links' => $votes_links,'time_links' => $time_links,'user' => $username));
			}
			else{
				echo \View\Loader::make()->render('templates/index.twig',array('trending_links' => $trending_links,'vote_links' => $votes_links,'time_links' => $time_links));
			}
			
			if(isset($_POST['add'])){
				$title=$_POST['title'];
				$url=$_POST['url'];
				if(isset($_SESSION["name"])){
					$username=$_SESSION["name"];
					\Model\LinkModel::insert($title,$url,$username);
				}
				else{
					$username=$_POST['user'];
					\Model\LinkModel::insert($title,$url,$username);
					$trending_links=\Model\LinkModel::trending();
					$votes_links=\Model\LinkModel::votes_sort();
					$time_links=\Model\LinkModel::time_sort();
				}
			}
			if(isset($_POST['signin'])){
				$username=$_POST['user'];
				$password=$_POST['password'];
				$row=\Model\SignModel::find($username,$password);
				$_SESSION["name"]=$row['username'];
				$_SESSION["user_id"]=$row['user_id'];
				if(isset($_SESSION["name"])){
					echo "<script type=\"text/javascript\">";
					echo "document.location.reload();";
					echo "</script>";
				}
				else{
					echo "Invalid username or password";
				}
			}
		}
	}