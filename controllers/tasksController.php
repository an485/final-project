<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = usertodos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = usertodos::findAll();
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

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
        //$record = usertodos::findOne($_REQUEST['userid']);
        self::getTemplate('create');

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {

		$upRecord = new usertodo();
    	$upRecord->id = $_REQUEST['id'];
		$upRecord->updated = date('Y-m-d H:m:s');
		$upRecord->task = $_POST['task'];
		$upRecord->complete = $_POST['complete'];
		$upRecord->save();
        //echo $upRecord;
		header("Location: index.php?page=all_tasks&action=show&msg=ToDo%20Updated&id=". $_REQUEST['id']);

    }
	 public static function insert()
    {

		$upRecord = new usertodo();
    	$upRecord->userid = $_REQUEST['userid'];
		$upRecord->task = $_POST['task'];
		$upRecord->save();
        //echo $upRecord;
		header("Location: index.php?page=all_tasks&action=all&msg=You%20Added%20a%20Task");

    }
	
    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = usertodos::findOne($_REQUEST['id']);
        $record->delete();
		header("Location: index.php?page=all_tasks&action=all&msg=Your%20task%20was%20deleted");
		//self::getTemplate('deleted', $record);
    }

}