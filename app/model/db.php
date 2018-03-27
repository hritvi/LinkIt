<?php
	class DB
	{
		private static $instance;

		public static function get_instance()
		{
			if(!self::$instance){
				//generate instance
				self::$instance = new PDO("mysql:host=localhost;dbname=mvc", '', '');
			    // set the PDO error mode to exception
			    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			return self::$instance;
		}
	}