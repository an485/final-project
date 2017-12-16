<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */

class tasksController extends http\controller
{

    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = usertodos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {
		session_start();
		$userID = $_SESSION["userID"];
		$records = usertodos::findTasksbyID($userID);
        self::getTemplate('all_tasks', $records);

    }

    public static function create()
    {
        print_r($_POST);
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = usertodos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);

    }
	 public static function add_task()
    {
        self::getTemplate('create');
    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
		settype($_POST['complete'], 'bool');

		$upRecord = new usertodo();
    	$upRecord->id = $_REQUEST['id'];
		date_default_timezone_set('America/New_York');
		$upRecord->updated = date('Y-m-d H:m:s');
		$upRecord->task = $_POST['task'];
		$upRecord->complete = $_POST["complete"];
		$upRecord->save();
        //echo $upRecord;
		header("Location: index.php?page=all_tasks&action=show&msg=ToDo%20Updated&id=". $_REQUEST['id']);

    }
	 public static function insert()
    {

		$upRecord = new usertodo();
    	$upRecord->userid = $_POST['userid'];
		date_default_timezone_set('America/New_York');
		$upRecord->created = date('Y-m-d H:m:s');
		$upRecord->updated = NULL;
		$upRecord->task = $_POST['task'];
		$upRecord->complete = "0";
		$upRecord->save();
        //echo $post_array;
		header("Location: index.php?page=all_tasks&action=all&msg=You%20Added%20a%20Task");

    }
	
    //this is the delete function.  
    public static function delete()
    {
        $record = usertodos::findOne($_REQUEST['id']);
        $record->delete();
		header("Location: index.php?page=all_tasks&action=all&msg=Your%20task%20was%20deleted");

    }

}