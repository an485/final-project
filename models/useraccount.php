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
  public function validate()
    {
       
		if (isset($this->email) && $this->email == '') {
            return FALSE;

        }
		if (isset($this->username) && $this->username == '') {
            return FALSE;
			
        }
		if (isset($this->fname) && $this->fname == '') {
            return FALSE;
			
        }
		if (isset($this->lname) && $this->lname == '') {
            return FALSE;
			
        }
		if (isset($this->password) && $this->password == '') {
            return FALSE;
			
        }
		else {
			return TRUE;
		} 

		
		
		
		
    }
	



}


?>
