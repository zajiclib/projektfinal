<?php

require_once("sessions.class.php");  
require_once("redirect.class.php");
require_once(BASE_PATH."/app/model/login.class.phpm");
require_once(BASE_PATH."/app/smarty/templateEngine.class.php"); 

class login
{
    
    public function __construct()
    {
        
        $email = $_POST["email"];
        $password = $_POST["passwd"];

        $login = new model\login;
        $loginTest = $login->login($email, $password);
        
        if($loginTest !== false)
        {
            $sessions = new sessions(); 
            $sessions->createSession("userName", $email); 

            echo $_SESSION["userName"];
            
            $adminRightsCheck = $login->checkAdminRights($email);

            if($adminRightsCheck["admin"] == 1)
            {
                $sessions->createSession("admin", 1);
                echo $_SESSION["admin"];
            }
            
            new redirect("/home"); 
            
        }
        
        else
        {
            $engine = new templateEngine;
            $smarty = &$engine->start();
            $smarty->assign("message", "Password or email are incorrect");
            $smarty->display("app/view/templates/errorPage.tpl"); 
        }
    }
}
