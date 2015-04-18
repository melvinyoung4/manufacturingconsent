<?php
//Require the composer autoloader. 
require(dirname(dirname(__FILE__)).'/vendor/autoload.php');

//setup the application
\Disco\classes\App::instance()->setUp();


/**
 * YOUR APPLICATION LOGIC GOES BELOW
 * ---------------------------------
*/



// Swap the View Service With an Extended View Class.
App::make('View','StandardView');

//match the index route
Router::get('/',function(){
	Template::with('index');
	View::title('Noam Chomsky | Teacher, Writer, and Intelect');	
});

Router::get('/bio',function(){
	Template::with('bio');
	View::title('');
});

Router::get('/offers',function(){
	Template::with('offers');
	View::title('');
});

Router::get('/books',function(){
	Template::with('books');
	View::title('');
});

Router::get('/articles',function(){
	Template::with('articles');
	View::title('');
});

/**
 * ---------------------------------
 * YOUR APPLICATION LOGIC STAYS ABOVE 
*/
App::tearDown();




?>
