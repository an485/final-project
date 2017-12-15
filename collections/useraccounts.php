<?php

class useraccounts extends \database\collection
{
    protected static $modelName = 'account';

	public static function findUser($email) {

		$tableName = get_called_class();
        $sql = "SELECT email FROM $tableName WHERE email= '$email'";
        $recordsSet = self::getResults2($sql);
		return $recordsSet;
		$count  = mysqli_num_rows($recordsSet);
		if($count==0) {
			return FALSE;//$message = "Invalid Username or Password!";
		} else {
			return TRUE;
		}	
	// echo $sql;	
	}
	public static function findUname($uName) {
	  
	   $tableName = get_called_class();
       $sql = "SELECT * FROM $tableName WHERE username= '$uName'";
       $recordsSet = self::getResults2($sql);
		return $recordsSet[0];
	}
	
}

?>
