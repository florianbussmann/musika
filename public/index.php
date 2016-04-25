<?php

require_once '../config.php';

// initialize variables
$template_data = array();

// handle login
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    if (!Session::check_credentials($_REQUEST['username'], $_REQUEST['password'])) {
        $template_data['message'] = 'Login failed!';
    }
}

// handle user creation
if (isset($_REQUEST['new_user'])) {
    if (!Session::add_user($_REQUEST['new_user'], $_REQUEST['password'])) {
        $template_data['message'] = 'User creation failed!';
    }
}

if (isset($_REQUEST['logout'])) {
    Session::logout();
}

if (Session::authenticated()) {
    Template::render('list', $template_data);
} else {
    $template_data['title'] = 'Login';
    Template::render('login', $template_data);
}

/*

TODO:

* store enrycpted versions of password

* read and display albums from database
* add an ORM-class for albums
* create input mask for adding an album to the database
*/
