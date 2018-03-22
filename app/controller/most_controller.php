<?php
	namespace Controller;
	class MostController
	{
		public function get()
		{
			if(isset($_SESSION["name"])){
				$links=\Model\MostModel::all();
				$username=$_SESSION["name"];
				echo \View\Loader::make()->render('templates/home.twig',array('links' => $links,'user' => $username));
			}
			else{
				$links=\Model\MostModel::all();
				echo \View\Loader::make()->render('templates/index.twig',array('links' => $links));
			}
		}
		public function post()
		{
			//create new model and save it in db
			$title=$_POST['title'];
			$url=$_POST['url'];
			if(isset($_SESSION["name"])){
				$links=\Model\MostModel::all();
				$username=$_SESSION["name"];
				\Model\MostModel::insert($title,$url,$username);
				echo \View\Loader::make()->render('templates/home.twig',array('links' => $links,'user' => $username));
			}
			else{
				$username=$_POST['user'];
				\Model\MostModel::insert($title,$url,$username);
				$links=\Model\MostModel::all();
				echo \View\Loader::make()->render('templates/index.twig',array('links' => $links));
			}
		}
	}