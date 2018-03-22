<?php
	namespace Controller;
	class HomeController
	{
		public function get()
		{
			if(isset($_SESSION["name"])){
				$links=\Model\LinkModel::all();
				$username=$_SESSION["name"];
				echo \View\Loader::make()->render('templates/home.twig',array('links' => $links,'user' => $username));
			}
			else{
				$links=\Model\LinkModel::all();
				echo \View\Loader::make()->render('templates/index.twig',array('links' => $links));
			}
		}
		public function post()
		{
			//create new model and save it in db
			$title=$_POST['title'];
			$url=$_POST['url'];
			if(isset($_SESSION["name"])){
				$links=\Model\LinkModel::all();
				$username=$_SESSION["name"];
				\Model\LinkModel::insert($title,$url,$username);
				echo \View\Loader::make()->render('templates/home.twig',array('links' => $links,'user' => $username));
			}
			else{
				$username=$_POST['user'];
				\Model\LinkModel::insert($title,$url,$username);
				$links=\Model\LinkModel::all();
				echo \View\Loader::make()->render('templates/index.twig',array('links' => $links));
			}
		}
	}