<?php


require_once("sessions.class.php");
require_once("app/smarty/templateEngine.class.php"); 
require_once(BASE_PATH."/app/model/home.class.phpm"); 
require_once(BASE_PATH."/app/model/create.class.phpm");
require_once(BASE_PATH."/app/model/update.class.phpm");
require_once(BASE_PATH."/app/model/delete.class.phpm");

class home
{
    public function __construct()
    {
        $sessions = new sessions;
        $engine = new templateEngine();
        $smarty = &$engine->start(); 

        
        if($sessions->checkSession())
        {            
            $model = new model\home();
            $data = $model->getData(); 
            
            $smarty->assign("data", $data);  
            $smarty->display("app/view/templates/home.tpl"); 

            // is admin
            if(isset($_SESSION["admin"]) && $_SESSION["admin"] == 1)
            {
                $smarty->display("app/view/templates/jsonExport.tpl"); 
            }
            
        }
        
        else
        {
            $smarty->display("extends:app/view/templates/loginForm.tpl");             
        }
                
    }


    
    public function createNote()
    {    
        $name = $_POST["noteName"];
        $content = $_POST["noteContent"];
        
        $createNote = new model\create($name, $content);   
    }


    
    public function updateNote()
    {
        $id = $_POST["noteId"];
        $name = $_POST["noteName"];
        $content = $_POST["noteContent"];
        $finished = $_POST["noteDateFinished"];
        
        new model\update($id, $name, $content, $finished);
    }


    
    public function deleteNote()
    {
        $id = $_POST["noteId"];        
        new model\delete($id);
        
    }
}
