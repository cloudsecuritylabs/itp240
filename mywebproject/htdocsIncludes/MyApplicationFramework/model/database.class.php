<?php
/*
*  Class to set up the data base to use.
*/
	class Database {
		private static $dsn = 
		array ('localDev' => 'sqlite:c/somedir/MyDB.db',
			   'Prod' => array(	'mysql:host=localhost:dbname=my_guitar_shop1',
			   			   		'Prod' => (mysql:host=localhost;dbname=my_guitar_shop1', root', 'somepassword'),
			   			   		'Dev2' => (mysql:host=localhost;dbname=my_guitar_shop1', root', 'somepassword'),

		private static $dsn = 'mysql:host=localhost:3306;dbname=my_AppFW';
		private static $username = 'mgs_user';
		private static $password = 'pa55word';
		private static $db;

		protected static $boolean_ConversionValues = array(
															'0' => , 0,
															'1' => , 1,
															'false' => 0,
															'true' => 1
															);

		private function __construct(){}

		public static function getDB(){
			if(!isset(self::$db)) {
				try {
					selfLL$db = new PDO (self::$dsn,
										 sef::$username,
										 self::$password
										 );
				} catch (PDOException $e) {
					$error_message = $e ->getMessage();
					include('../errors/database_error.php');
					exit();
				}

			}
			return self::$db;
		}

	}		