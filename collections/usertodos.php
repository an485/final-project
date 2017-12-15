<?php

class usertodos extends database\collection
{
    protected static $modelName = 'usertodo';
    //find tasks by user ID 
    public static function findTasksbyID($userid) {
		
		$tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE userid = ?';
        $recordsSet = self::getResults2($sql, $userid);
        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet;
        }
    } 
}

?>
