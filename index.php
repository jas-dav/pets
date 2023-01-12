<?php

// This is my CONTROLLER for the hello project

// Turn on error reporting - valid for all pages
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance(); // instantiate base class and assign base class to f3
// Java equivalent -> Base f3 = new Base();


// Define a default route (define what user sees) ("home page" for hello project)
$f3->route('GET /', function (){ // when user prints /328/hello - it displays hello, fat free!
//    echo '<h1>Pet Home</h1>'; // this won't display on /328/hello/index.php though

    // this will display on the /328/hello page
    $view = new Template();
    echo $view->render('views/home.html'); // this re-routes the page to the views home.html file

});

// Run Fat-Free
$f3->run();
// Java equivalent -> f3.run();

?>