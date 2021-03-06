<?php

namespace database;

abstract class collection
{

    //factory to make model
    static public function create()
    {
        $model = new static::$modelName;
        return $model;
    }

    static public function findAll($userid)
    {
       $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . 'WHERE userid =' . $userid;
        return self::getResults2($sql);
    }


	 protected static function getResults2($sql, $parameters = null) {
        if (!is_array($parameters)) {
            $parameters = (array) $parameters;
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute($parameters);
        $class = static::$modelName;
        if ($statement->rowCount() > 0) {
            $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
            $recordsSet = $statement->fetchAll();
        } else {
            $recordsSet = NULL;
        }
        return $recordsSet;
    }


    static public function findOne($id)
    {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
        $recordsSet = self::getResults2($sql);
        return $recordsSet[0];
    }

}

?>
