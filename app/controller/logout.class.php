<?php

require_once("sessions.class.php"); 
require_once("redirect.class.php");

class logout
{
    public function __construct()
    {
        $sessions = new sessions();
        $sessions->destroySession();

        new redirect("/home"); 
    }
}
