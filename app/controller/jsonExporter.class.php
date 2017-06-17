<?php

require_once(BASE_PATH."/app/model/jsonExporter.class.phpm"); 
require_once("app/smarty/templateEngine.class.php"); 

class jsonExporter
{
    public function __construct()
    {
        $exporter = new model\jsonExporter;
        $path = $exporter->export();
    
        $engine = new templateEngine();
        $smarty = &$engine->start(); 
        
        $smarty->assign("fileName", $path);
        $smarty->display("app/view/templates/download.tpl"); 
    }
}
