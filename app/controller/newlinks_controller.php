<?php
	namespace Controller;
	class NewLinkController
	{
		public function get()
		{
			if(isset($_SESSION["name"])){
				$links=\Model\NewLinkModel::all();
				$username=$_SESSION["name"];
				echo \View\Loader::make()->render('templates/home.twig',array('links' => $links,'user' => $username));
			}
			else{
				$links=\Model\NewLinkModel::all();
				echo \View\Loader::make()->render('templates/index.twig',array('links' => $links));
			}
		}
		public function post()
		{
			//create new model and save it in db
			$title=$_POST['title'];
			$url=$_POST['url'];
			if(isset($_SESSION["name"])){
				$links=\Model\NewLinkModel::all();
				$username=$_SESSION["name"];
				\Model\NewLinkModel::insert($title,$url,$username);
				echo \View\Loader::make()->render('templates/home.twig',array('links' => $links,'user' => $username));
			}
			else{
				$username=$_POST['user'];
				\Model\NewLinkModel::insert($title,$url,$username);
				$links=\Model\NewLinkModel::all();
				echo \View\Loader::make()->render('templates/index.twig',array('links' => $links));
			}
		}
	}