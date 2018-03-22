<?php
	namespace Controller;
	class UserController{
		function get($name){
			$user=\Model\UserModel::find($name);
			$links=\Model\UserModel::link($name);
			$comments=\Model\UserModel::comments($name);
			if(!empty($user)){
				echo \View\Loader::make()->render('templates/user.twig', array('user' => $user , 'links' => $links, 'comments' => $comments));
			}
			else{
				echo \View\Loader::make()->render('templates/error_404.twig');
			}
		}
	}