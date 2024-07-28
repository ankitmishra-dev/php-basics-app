<?php

/**
 * It is the space where we manage our applications complete routing mechanism
 */

$routerObject->get('/', 'controllers/index.php');
$routerObject->get('/about', 'controllers/aboutus.php');
$routerObject->get('/contact', 'controllers/contactus.php');
$routerObject->get('/login', 'views/login.view.php');
$routerObject->get('/signup', 'controllers/signup.php');
$routerObject->get('/posts', 'controllers/notes/index.php');
$routerObject->get('/post', 'controllers/notes/show.php');
$routerObject->delete('/post', 'controllers/notes/show.php');