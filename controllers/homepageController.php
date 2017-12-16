<?php


class homepageController extends http\controller
{

    public static function show()
    {

        $templateData['site_name'] = 'mysite';

//template data contains what will show up in the $data variable in the homepage template
//the name of the template 'homepage' becomes 'homepage.php' in the pages directory

        self::getTemplate('homepage', $templateData);
    }
	
	 public static function login()
    {
		self::getTemplate('userlogin');
	}


    public static function create()
    {


//I just put a $_POST here but this is where you would put the code to add a record
        print_r($_POST);
    }

}
