<?php

/**
 * It is the space where we manage our applications complete routing mechanism
 */

/* Login System */
$routerObject->get('/login', 'views/authentication/login.view.php');
$routerObject->get('/signup', 'controllers/signup.php');


/* Notes related routes */
$routerObject->get('/posts', 'controllers/notes/index.php');
$routerObject->get('/post', 'controllers/notes/show.php');
$routerObject->delete('/post', 'controllers/notes/show.php');

/* Other routes */
$routerObject->get('/', 'controllers/index.php');
$routerObject->get('/about', 'controllers/aboutus.php');
$routerObject->get('/contact', 'controllers/contactus.php');
