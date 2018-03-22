<?php
	namespace Controller;
	class LinkController
	{
		function get($slug)
		{
			$link=\Model\LinkModel::find($slug);
			$time_comments=\Model\CommentModel::time_sort($slug);
			$vote_comments=\Model\CommentModel::vote_sort($slug);
			if(!empty($link)){
				echo \View\Loader::make()->render('templates/link.twig',array('link' => $link,'time_comments' => $time_comments,'vote_comments' => $vote_comments ));
			}
			else{
				echo \View\Loader::make()->render('templates/error_404.twig');
			}
		}
		function post($slug)
		{
			$content=$_POST['comment'];
			if(!empty($_SESSION["name"])){
				$username=$_SESSION["name"];
			}
			else{
				$username="Anonymous";
			}
			\Model\CommentModel::insert($content,$slug,$username);
			$link=\Model\LinkModel::find($slug);
			$comments=\Model\CommentModel::comment($slug);
			echo \View\Loader::make()->render('templates/link.twig',array('link' => $link,'comments' => $comments ));
		}
	}