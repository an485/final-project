<?php

class usertodos extends database\collection
{
    protected static $modelName = 'usertodo';

    //This is the function to write to find tasks by user ID for listing on their homepage.
    //Don't forget to return the record set see findAll in the collection class
    public static function findTasksbyID($userid) {
		
		$tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE userid = ?';
        //grab the only record for find one and return as an object
        $recordsSet = self::getResults2($sql, $userid);
        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet;
        }
    }
}

?>
