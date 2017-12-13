<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{	
    public static function genarateTableFromMultiArray($array)
    {
        if (!$array) {
    echo "<h2>0 Tasks... <br><br>Create your First Task!</h2>";
		} 
		else {
		$tableGen = "<p>Click the View link to edit, update, or delete a ToDo item in your list.</p>";	
        $tableGen .= '<table border="1"cellpadding="10">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
			
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
			if($heading != 'userid' && $heading != 'tableName')
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $heading => $record) {
			if($heading != 'userid' && $heading != 'tableName')
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
				
             //  $key = self::columnNames($key);
			if($key == 'id') 
				{
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                } else if($key != 'userid') {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
	  }
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        
		$tableGen = '<table border="1" cellpadding="10"><tr>';
        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
			$innerRow = self::columnNames($innerRow);
			if($innerRow != 'id' && $innerRow != 'userid' && $innerRow != 'tableName')
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $innerRow => $value) {
			if($innerRow != 'id' && $innerRow != 'userid' && $innerRow != 'tableName')
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
	 
	
	/*
	*
	*
	* Put single Task into a form so we can update the record
	*
	*/ 
	
	 public static function generateFormFromOneRecord($innerArray)
    {
		
		$formGen = '<table border="1" cellpadding="10"><tr>';
        $formGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
			 $innerRow = self::columnNames($innerRow);
            if($innerRow != 'id' && $innerRow != 'userid' && $innerRow != 'tableName')
				
			$formGen .= '<th>' . $innerRow . '</th>';
        }
        $formGen .= '</tr>';

        foreach ($innerArray as $innerRow => $value) {
            if($innerRow != 'id' && $innerRow != 'created' && $innerRow != 'userid' && $innerRow != 'updated' && $innerRow != 'tableName') {
			$formGen .= "<td><input type='text' name=" . $innerRow . " id=" . $innerRow . " value='$value'></td>";	
			}
			else {
				if($innerRow != 'id' && $innerRow != 'userid' && $innerRow != 'tableName')
            $formGen .= "<td>" . $value . "</td>";
				
			}
        }

        $formGen .= '</tr></table>';
        return $formGen;
    }
	
	public static function columnNames($innerRow)
    {
		
		if($innerRow == 'created')
			{ $innerRow = 'Date Created'; }
		if($innerRow == 'updated')
			{ $innerRow = 'Last Updated'; }
		//if($innerRow == 'duedate')
		//	{ $innerRow = 'Due Date'; }
		if($innerRow == 'task')
			{ $innerRow = 'ToDo Task'; }
		if($innerRow == 'complete')
			{ $innerRow = 'Completed'; }
		
		else {
				$innerRow = $innerRow;
			}
        return $innerRow;
		//echo $innerRow;
	}
	
	
	//view Account details
	public static function accountValues($innerArray)
	{
    		$formHtml ="<p>User Name: <strong>" . $innerArray['username'] ."</strong><br>";
		    $formHtml .="<p>First Name: <strong>" . $innerArray['fname'] ."</strong><br>";
    		$formHtml .="<p>Last Name: <strong>" . $innerArray['lname'] ."</strong><br>";
		    $formHtml .="<p>Email: <strong>" . $innerArray['email'] ."</strong><br>";
			return $formHtml;
		
	}
	//present Account in a Form
	public static function accountEditForm($innerArray)
	{
    		$formHtml ="<p>User Name: <strong>" . $innerArray['username'] ."</strong><br>";
		    $formHtml .="<input type='hidden' name='id' id='id' value=". $innerArray['id'] ."><br>";
    		$formHtml .="<label>First Name:</label><br> <input type='text' name='fname' id='fname' value=". $innerArray['fname'] ."><br><br>";
		    $formHtml .="<label>Last Name: </label><br><input type='text' name='lname' id='lname' value=". $innerArray['lname'] ."><br><br>";
		    $formHtml .="<label>Email: </label><br><input type='email' name='email' id='email' value=". $innerArray['email'] ."><br><br>";
		   // $formHtml .="<input type='password' name='password' id='password'><br>";
			return $formHtml;
		
	}
	
}

?>