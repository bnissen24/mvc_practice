<?php

require('model/database.php');
require('model/accounts_db.php');
require('model/questions_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
}

switch ($action) {
    case 'show_login': {
        include('views/login.php');
        break;
    }

    case 'validate_login': {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        if ($email == NULL || $password == NULL) {
            $error = 'Email and Password are required';
            include('errors/error.php');
        } else {
            $userId = validate_login($email, $password);
            if ($userId !== false) {
                header("Location: .?action=display_users&userId=$userId");
            } else {
                $error = 'Invalid Login';
                include('errors/error.php');
            }
        }
        break;
    }

    case 'display_users': {
        $userId = filter_input(INPUT_GET, 'userId');
        if ($userId == NULL) {
            $error = 'User Id unavailable';
            include('errors/error.php');
        } else {
            $questions = get_questions_by_ownerId($userId);
            include('views/display_questions.php');
        }
        break;
    }

    default: {
        $error = 'Unknown Action';
        include('errors/error.php');
    }
}