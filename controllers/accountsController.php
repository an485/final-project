<?php

class accountsController extends http\controller
{

    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {		
		session_start();
		$userID = $_SESSION["userID"];
		$record = useraccounts::findOne($userID);
        self::getTemplate('show_account', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {

        $records = useraccounts::findAll();
        self::getTemplate('all_accounts', $records);

    }
	
	public static function register()
    {
        // Show registration form
        self::getTemplate('register');
    }
	
	//Save updated profile Info
	public static function update()
    {
        session_start();
		$_SESSION["FName"] = $_POST['fname'];
		$upRecord = new useraccount();
    	$upRecord->id = $_POST['id'];
		$upRecord->fname = $_POST['fname'];
		$upRecord->lname = $_POST['lname'];
		$upRecord->email = $_POST['email'];
		$upRecord->save();
        //echo $upRecord;
		header("Location: index.php?page=show_account&action=show");

    }

   public static function store()
    {
        $user = useraccounts::findUser($_REQUEST['email']);
			if ($user == FALSE) {  //  does not exist
	            $uname = useraccounts::findUname($_REQUEST['username']); 
				if ($uname == FALSE) {				
				//echo 'does Not Exist';
                $user = new useraccount();
                $user->email = $_POST['email'];
		        $user->username = $_POST['username'];
                $user->fname = $_POST['fname'];
                $user->lname = $_POST['lname'];
                $user->password = utility\registration::setPassword($_POST['password']);		
		    	$user->save();

            header("Location: index.php?page=userlogin&action=login&msg=Account%20Activated%20%2D%20Login%20to%20Get%20Started");
				}
				else {  
					$baduName = $_POST['username'];
					header("Location: index.php?msg=The%20User%20Name%20" . $baduName . " is%20already%20registered"); 
					 }
       } else {
			//echo 'Its True does exist'; 
				$badEmail = $_POST['email'];
         header("Location: index.php?msg=Your%20email%20" . $_POST['email'] . "%20is%20already%20registered");

       } 
    }
	
    public static function edit()
    {
		session_start();
		$userID = $_SESSION["userID"];
		$record = useraccounts::findOne($userID);
        self::getTemplate('edit_account', $record);

    }

    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {

        $user = useraccounts::findUname($_REQUEST['username']);
        if ($user == FALSE) {
			header("Location: index.php?page=userlogin&action=login&msg=Incorrect%20User%20Name%20or%20Password");
            
        } else {
			$pw = utility\registration::checkPassword($_POST['password'], $user['password']);
			echo $pw;
			if($pw == TRUE) {
                echo 'login';
                session_start();
				$_SESSION["userID"] = $user['id'];
				$_SESSION["FName"] =  $user['fname'];
				header("Location: index.php?page=all_tasks&action=all");
                //forward the user to the show all todos page
			
            } else {
                header("Location: index.php?page=userlogin&action=login&msg=Incorrect%20User%20Name%20or%20Password");
            }
        }
	}
	
	//Log out and kill session
	public static function logout()  {
		  
		 //$_SESSION = array();
		session_start();
	    $_SESSION = array();
		session_destroy();
        self::getTemplate('homepage');		
	}
	
}