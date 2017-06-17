<?php

require_once(BASE_PATH."/app/model/registration.class.phpm");

require_once("sessions.class.php");
require_once("redirect.class.php"); 
require_once("app/smarty/templateEngine.class.php");


class registration
{
    public function __construct()
    {
        $engine = new templateEngine();
        $smarty = &$engine->start();
        $smarty->display("app/view/templates/registerForm.tpl"); 
        
        if(isset($_POST["email"]))
        {            
            $email = $_POST["email"];
            $password = $_POST["passwd"];
            $admin = $_POST["admin"]; 
            
            $registration = new model\registration();
            $regResult = $registration->registerUser($email, $password, $admin);

            if($regResult !== true)
            {
                $smarty->assign("message", "Try it again, registration failed");
                $smarty->display("app/view/templates/error.tpl"); 
            }

        }
    }
}