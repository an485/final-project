<?php
namespace database;

abstract class model
{

	
	 protected static function getResults($sql) {
        $db = dbConn::getConnection();
		$modelName = static::$modelName;
        $statement = $db->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(\PDO::FETCH_CLASS, $modelName);
        $recordsSet = $statement->fetchAll();
        return $recordsSet;
    }
    public function save()
    {
		  //add validation for saving 
         if($this->validate() == FALSE) {
	
	     echo 'You cannot leave any fields blank and passwords must be more than 4 characters. ';
	     exit;
         }
		
		
		 $db = dbConn::getConnection();
		if (!isset($this->id)) {
           // echo "Insert";
			$sql = $this->insert();
        } else {
            $sql = $this->update();
        }
        $statement = $db->prepare($sql);
        $statement->execute();
        //print_r($statement);
    }

  public function validate() {
	  return TRUE;
  }
	
	private function insert()
    {
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
		$array = get_object_vars($this);
		$columns = array_keys($array);
        $columnString = implode(', ', $columns);
        $valueString = implode("', '", $array);
		$sql = "INSERT INTO " . $tableName .  " (" . $columnString . ") VALUES  ('" . $valueString . "')";
		
		return $sql;
		//echo $sql;
    }
	
    private function update()
    {
      
      $modelName = static::$modelName;
       $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
		 array_pop($array);
        array_shift($array);
        $comma = " ";
		 $sql = 'UPDATE ' . $tableName . ' SET ';
        foreach ($array as $key => $value) {
            if (!empty($value)) {
                $sql .= $comma . $key . ' = "' . $value . '"';
                $comma = ", ";
            }
        }
        $sql .= ' WHERE id=' . $this->id;
        return $sql;

    }

    public function delete()
    {
        $db = dbConn::getConnection();
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $sql = 'DELETE FROM ' . $tableName . ' WHERE id=' . $this->id;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
	
	
}

?>
