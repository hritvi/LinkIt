<?php
	namespace Controller;
	class LogoutController{
		public function get()
		{
			session_start();
			if(session_destroy()) {
      			header("Location: /");
      		}
   		}
	}