<?php

final class usertodo extends database\model
{
    public $id;
    public $userid;
    public $created;
	public $updated;
	//public $duedate;
    public $task;
    public $complete;
    protected static $modelName = 'usertodo';

   /* public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    } */
	public function __construct()
    {
        $this->tableName = 'usertodos';
	
    }
}

?>
