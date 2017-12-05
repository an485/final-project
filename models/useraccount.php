<?php

final class useraccount extends \database\model
{
    public $id;
    public $username;
	public $email;
    public $fname;
    public $lname;
    public $password;
    protected static $modelName = 'useraccount';

   public static function getTablename()
    {

        $tableName = 'useraccounts';
        return $tableName;
    }

		/*public function __construct()
    {
        $this->tableName = 'useraccounts';
	
    }
*/
    //to find a users tasks you need to create a method here.  Use $this->id to get the usersID For the query
    public static function findTasks()
    {

        //I am temporarily putting a findall here but you should add a method to todos that takes the USER ID and returns their tasks.
        $records = todos::findAll();
        print_r($records);
        return $records;
    }
    //add a method to compare the passwords this is where bcrypt should be done and it should return TRUE / FALSE for login
    public static function checkPassword($password) {}


}


?>
