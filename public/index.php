<?php
	require '../vendor/autoload.php';
	session_start();
	ToroHook::add("404",  function() {
		echo "404 - Not Found";
	});
	Toro::serve(array(
	    "/" => "\Controller\HomeController",
	    "/signup" => "\Controller\SignUpController",
	    "/signin" => "\Controller\SignInController",
	    "/link/:number"=>"\Controller\LinkController",
	    "/new" => "\Controller\NewLinkController",
	    "/mostpopular" => "\Controller\MostController",
	    "/user/:alpha" => "\Controller\UserController",
	    "/upvotes/:number" => "\Controller\VotesController"
	));
