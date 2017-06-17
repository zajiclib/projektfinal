<?php

require_once("sessions.class.php");

class sessions
{

    public function createSession($sessionName, $value)
    {
        $_SESSION[$sessionName] = $value; 
    }


    public function updateSession() {}


    public function checkSession()
    {
        return (!isset($_SESSION["userName"])) ? false : true; 
    }


    public function destroySession()
    {
        session_unset();
        session_destroy();
        new redirect("/home"); 
    }

            
    
}
