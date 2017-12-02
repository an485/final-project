<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="1"cellpadding="10">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        
		$tableGen = '<table border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
			$innerRow = self::columnNames($innerRow);
			if($innerRow != 'id')
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $innerRow => $value) {
			if($innerRow != 'id')
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
	 public static function columnNames($innerRow)
    {
		
            if($innerRow == 'owneremail')
			{ $innerRow = 'Email Address'; }
		if($innerRow == 'createddate')
			{ $innerRow = 'Date Created'; }
		if($innerRow == 'lastupdated')
			{ $innerRow = 'Last Updated'; }
		if($innerRow == 'duedate')
			{ $innerRow = 'Due Date'; }
		if($innerRow == 'message')
			{ $innerRow = 'ToDo Task'; }
		if($innerRow == 'isdone')
			{ $innerRow = 'Is Done'; }
		
		else {
				$innerRow = $innerRow;
			}
        return $innerRow;
		//echo $innerRow;
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
            if($innerRow != 'id' && $innerRow != 'ownerid')
				
			$formGen .= '<th>' . $innerRow . '</th>';
        }
        $formGen .= '</tr>';

        foreach ($innerArray as $innerRow => $value) {
            if($innerRow != 'id' && $innerRow != 'createddate' && $innerRow != 'ownerid') {
			$formGen .= '<td><input type="text" name=' . $innerRow . ' id=' . $innerRow . ' value=' . $value . '></td>';	
			}
			else {
				if($innerRow != 'id' && $innerRow != 'ownerid')
            $formGen .= '<td>' . $value . '</td>';
				
			}
        }

        $formGen .= '</tr></table>';
        return $formGen;
		
	 /* $formGen = '<form action="index.php?page=show_account&action=login" method="POST"> <div class="container edittask">';


        foreach ($innerArray as $value) {
            $formGen .= '<input type="text" placeholder=' . $value . ' name="uname" required>';
        }

        $formGen .= '</div></form>';
        return $formGen; */
    }
	
}

?>