<?php

final class usertodo extends database\model
{
    public $id;
    public $userid;
    public $created;
	public $updated;
    public $task;
    public $complete;
    protected static $modelName = 'usertodo';

 public static function getTablename()
    {
        $tableName = 'usertodos';
        return $tableName;
    }
	//Validate fields
  public function validate()
    {
    	if (isset($this->task) && strlen($_POST['task']) <= 1) {
            return FALSE;
			
        }
		if (isset($this->complete) && strlen($_POST['complete']) >= 2) {
          return FALSE;
			
       }
		else {
			return TRUE;
		} 		
    }  
	

}

?>
