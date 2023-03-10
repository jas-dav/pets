<!---
    By: Jasmine David and Maksim Samoylenko
    1/12/2023
    url: http://jbdavid.greenriverdev.com/328/pets/
    Webpage that displays image of pet using MVC and fatfree.

---->

<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();


// Define a default route 
$f3->route('GET /', function (){
//    echo '<h1>Pet Home</h1>';
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();

?>
