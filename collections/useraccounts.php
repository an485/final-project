<?php

class useraccounts extends \database\collection
{
    protected static $modelName = 'account';

    //This is the function to write to find user by ID for login.
    //Don't forget to return the object see findOne in the collection class
    public static  function findUserbyID($userid) {
		
		
	}
	
	public static function findUser($email) {
	   // $db = dbConn::getConnection();
      //  $modelName = static::$modelName;
		$tableName = get_called_class();
        $sql = "SELECT email FROM useraccounts WHERE email= '$email'";
     //   $statement = $db->prepare($sql);
     //   $statement->execute();
	//	$statement->setFetchMode(\PDO::FETCH_CLASS, $modelName);
     //   $recordsSet = $statement->fetchAll();
        $recordsSet = self::getResults($sql);
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
		/* FIX TABLE INSERTION */
       $sql = "SELECT * FROM useraccounts WHERE username= '$uName'";
       $recordsSet = self::getResults2($sql);
		return $recordsSet[0];
	/*	$count  = mysqli_num_rows($recordsSet);
	if($count==0) {
		return FALSE;//$message = "Invalid Username or Password!";
	} else {
	return TRUE;
	}	*/
	// echo $sql;	
	}
	
}

?>
