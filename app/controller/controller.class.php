<?php

require_once("error.class.php");

class controller
{
    public function __construct($url, $file)
    {
        require ($file);
        
        $controller = new $url[0];
        
        if(isset($url[1]))
        {
            if(method_exists($controller, $url[1]))
            {
                if(isset($url[2]))
                {
                    $controller->{$url[1]}($url[2]);
                }
                
                else
                {
                    $controller->{$url[1]}();
                }
            }
            
            else
            {
                new error("Page not exists :(");
            }
        }
    }
    
}
