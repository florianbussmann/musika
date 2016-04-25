<?php

class Session {
    public static function add_user($user, $password)
    {
        global $dbh;
        
        $stmt = $dbh->prepare("INSERT INTO user (username, password) VALUES (:user, :password)");
        
        return $stmt->execute(array(
            'user'     => $user,
            'password' => $password
        ));
    }
    
    public static function check_credentials($user, $password)
    {
        global $dbh;

        $stmt = $dbh->prepare("SELECT COUNT(*) FROM user
            WHERE username = :user AND password = :password");

        $stmt->execute(array(
            'user'     => $user,
            'password' => $password
        ));

        if ($stmt->fetchColumn() == 1) {
            $_SESSION['logged_in'] = true;
            
            // create new session_id
            session_regenerate_id(true);
            
            return true;
        }

        return false;
    }

    public static function authenticated()
    {
        return ($_SESSION['logged_in'] === true);
    }

    public static function logout()
    {
        // destroy old session
        session_destroy();

        // immediately start a new one
        session_start();
        
        // create new session_id
        session_regenerate_id(true);
    }
}
