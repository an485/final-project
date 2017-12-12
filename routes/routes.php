<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:25 PM
 */

class routes
{

    public static function getRoutes()
    {
        //bellow adds routes to your program, routes match the URL and request method with the controller and method.
        //You need to follow this pattern to add new URLS
        //You should improve this function by making functions to create routes in a factory. I will look for this when grading

        //I also use object for the route because it has data and it's easier to access.
        $route = new route();
        //this is the index.php route for GET
        //Specify the request method
        $route->http_method = 'GET';
        //specify the page.  index.php?page=index.  (controller name / method called
        $route->page = 'homepage';
        //specify the action that is in the URL to trigger this route index.php?page=index&action=show
        $route->action = 'show';
        //specify the name of the controller class that will contain the functions that deal with the requests
        $route->controller = 'homepageController';
        //specify the name of the method that is called, the method should be the same as the action
        $route->method = 'show';
        //this adds the route to the routes array.
        $routes[] = $route;

        //this is the index.php route for POST

        //This is an examole of the post for index
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;

        //This is an examole of the post for tasks to list tasks.  See the action matches the method name.
        //you need to add routes for create, edit, and delete
        //GET METHOD index.php?page=tasks&action=all

        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'all_tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=all

        //Show a Task
        //GET METHOD index.php?page=tasks&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'all_tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;

		// Edit task
		$route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'edit_task';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;
		
	
       
		// Update task
		$route = new route();
        $route->http_method = 'POST';
        $route->action = 'save_task';
        $route->page = 'all_tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;
		
		// edit account
		$route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'edit_account';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;
		
		//update account
		$route = new route();
        $route->http_method = 'POST';
        $route->action = 'update';
        $route->page = 'show_account';
        $route->controller = 'accountsController';
        $route->method = 'update';
        $routes[] = $route;
		
		//Delete
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'deleted';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;

		//create a task page
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'add_task';
        $route->page = 'create';
        $route->controller = 'tasksController';
        $route->method = 'add_task';
        $routes[] = $route;
		
		//insert a task 
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'add_task';
        $route->page = 'all_tasks';
        $route->controller = 'tasksController';
        $route->method = 'insert';
        $routes[] = $route;
         
		
		/*//Accounts
		$route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'account';
        $route->controller = 'accountsController';
        $route->method = 'save'; */
		//$route->method = 'test';
        $routes[] = $route;
        //this is the route for the reg form
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'account';
        $route->controller = 'accountsController';
        $route->method = 'register';
        $routes[] = $route;
        //this handles the reg post to create the user
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'store';
        $route->page = 'account';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;
		
		 //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;
		
		//show login page for a user
		$route = new route();
        $route->http_method = 'GET';
        $route->action = 'login';
        $route->page = 'userlogin';
        $route->controller = 'homepageController';
        $route->method = 'login';
        $routes[] = $route;
		
		 //GET METHOD index.php?page=all_tasks&action=all
		// Show all the users Tasks after login
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'all_tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
		
		// logout
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'logout';
        $route->page = 'homepage';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;
		
		// show profile
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'show_account';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;

        return $routes;
    }
}

//this is the route prototype object  you would make a factory to return this

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}