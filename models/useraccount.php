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

    public function checkPassword($LoginPassword) {
        return password_verify($LoginPassword, $this->password);
    }
	
	//Validate fields
  public function validate()
    {	
		if (isset($this->email) && $this->email == '') {
            return FALSE;

        }
		if (isset($this->username) && strlen($_POST['username']) == 0) {
            return FALSE;
			
        }
		if (isset($this->fname) && strlen($_POST['fname']) == 0) {
            return FALSE;
			
        }
		if (isset($this->lname) && strlen($_POST['lname']) == 0) {
            return FALSE;
			
        }
		if (isset($this->password) && strlen($_POST['password']) <= 6) {
            return FALSE;
			
        }
		else {
			return TRUE;
		} 

		
		
		
		
    }
	



}


?>
