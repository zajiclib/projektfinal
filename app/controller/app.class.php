<?php

require_once("error.class.php");
require_once("controller.class.php");

class app
{
    
    public function __construct()
    {
        
        $url = $_GET["url"];
        $url = rtrim($url, "/");
        $r = $url;
        $url = explode("/", $url);
        
        //NOTE(Roman): default page

        if($url[0] == "")
        {
            $url[0] = "home";
        }
        
        $file = "app/controller/". $url[0] . ".class.php";
        
        if(file_exists($file))
        {
            new controller($url, $file);
        }
                
        else
        {
            new app\error("Page not exists :(");
        }
    }
    
}
