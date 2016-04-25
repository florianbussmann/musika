<?php
header("Content-Type: text/html; charset=windows-1252");
ini_set('default_charset', 'cp1252');

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

// handle album creation
if (isset($_REQUEST['new_album'])) {
    if(!Album::add_album($_REQUEST['new_album'], $_REQUEST['year'], $_REQUEST['interpret'])) {
        $template_data['message'] = 'Album creation failed!';
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

* create input mask for adding an album to the database
*/
