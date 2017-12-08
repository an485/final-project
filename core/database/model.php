<?php
namespace database;

abstract class model
{

    public function save()
    {
      /*  if ($this->id != '') {
            $sql = $this->update();
        } else {
            $sql = $this->insert();
            $INSERT = TRUE;
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $array = get_object_vars($this);

        if ($INSERT == TRUE) {

            unset($array['id']);

        }

        foreach (array_flip($array) as $key => $value) {
            $statement->bindParam(":$value", $this->$value);
        }
        $statement->execute();
        if ($INSERT == TRUE) {

            $this->id = $db->lastInsertId();

        }


        return $this->id; 
		*/
		
		// TEST mine form Active record
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

    private function insert()
    {

      /* $modelName = static::$modelName;
       // $tableName = $modelName::getTablename();
		$tableName = $this->tableName;
        $array = get_object_vars($this);
        unset($array['id']);
        $columnString = implode(',', array_flip($array));
        $valueString = ':' . implode(',:', array_flip($array));
        $sql = 'INSERT INTO ' . $tableName . ' (' . $columnString . ') VALUES (' . $valueString . ')';
        echo $sql;
		//return $sql;
		
		*/
		//mine from Active Record
		$array = get_object_vars($this);
		array_pop($array);
		unset($array['id']);
        //array_shift($array);
		$columns = array_keys($array);
        $columnString = implode(', ', $columns);
        $valueString = implode("', '", $array);
		$table = $this->tableName; 
		$sql = "INSERT INTO " . $table .  " (" . $columnString . ") VALUES  ('" . $valueString . "')";
		//echo "I just Instered a new row with the values " . $valueString . "<br>";
		
		//print_r($columns);
	//	echo '<br>';
		//print_r($columnString);
		//echo '<br>';
		//print_r($valueString);
		return $sql;
		//echo $sql;
    }

    private function update()
    {
      
       $modelName = static::$modelName;
       // $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
		 array_pop($array);
        array_shift($array);
        $comma = " ";
      //  $sql = 'UPDATE ' . $tableName . ' SET ';
		 $sql = 'UPDATE ' . $this->tableName . ' SET ';
        foreach ($array as $key => $value) {
            if (!empty($value)) {
                $sql .= $comma . $key . ' = "' . $value . '"';
                $comma = ", ";
            }
        }
        $sql .= ' WHERE id=' . $this->id;
        return $sql;
		//echo $sql; 
		
		//Test from my active record
		/*$array = get_object_vars($this);
	    array_pop($array);
        array_shift($array);
		$sql = 'UPDATE ' . $this->tableName . ' SET ';
		foreach($array as $field => $value)
			if (isset($value)) 
                $values[] = $field.' = '. $value ;
			  
		$sql .= implode(', ', $values);	
		$sql .= ' WHERE id=' . $this->id;
       
		//echo 'I just updated record ' . $this->id;
		//return $sql;
		echo $sql;
*/
    }

    public function delete()
    {
        $db = dbConn::getConnection();
        $modelName = static::$modelName;
        //$tableName = $modelName::getTablename();
        $sql = 'DELETE FROM ' . $this->tableName . ' WHERE id=' . $this->id;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}

?>
