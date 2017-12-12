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
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    //this is to register an account i.e. insert a new account
	
	public static function register()
    {
        // Show registration form
        self::getTemplate('register');
    }
	
	//Save updated profile Info
	public static function update()
    {

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
		//$count  = mysqli_num_rows($user);
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
					header("Location: index.php?page=account&action=register&msg=The%20User%20Name%20" . $baduName . " is%20already%20registered"); 
					 }
       } else {
			//echo 'Its True does exist'; 
				$badEmail = $_POST['email'];
         header("Location: index.php?page=account&action=register&msg=Your%20email%20" . $_POST['email'] . "%20is%20already%20registered");

	 
       } 
    }


    //this is the function to save the user the user profile
    public static function test()
    {
        print_r($_POST);

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
        //you will need to fix this so we can find users username.  YOu should add this method findUser to the accounts collection
        //when you add the method you need to look at my find one, you need to return the user object.
        //then you need to check the password and create the session if the password matches.
        //you might want to add something that handles if the password is invalid, you could add a page template and direct to that
        //after you login you can use the header function to forward the user to a page that displays their tasks.
        //        $record = accounts::findUser($_POST['email']);
        $user = useraccounts::findUname($_REQUEST['username']);
		//echo $user['password'];
		//$ckPW = useraccounts::checkPassword($_POST['password']);
        if ($user == FALSE) {
            echo 'user not found';
        } else {
            //if($user->checkPassword($_POST['password']) == TRUE) {
			$pw = utility\registration::checkPassword($_POST['password'], $user['password']);
			echo $pw;
			if($pw == TRUE) {
                echo 'login';
                session_start();
                //$_SESSION["userID"] = $user->id;
				$_SESSION["userID"] = $user['id'];
				$_SESSION["FName"] = $user['fname'];
				header("Location: index.php?page=all_tasks&action=all");
                //forward the user to the show all todos page
                //print_r($_SESSION);
			
            } else {
                echo  'password does not match';
				//print_r($ckPW);
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