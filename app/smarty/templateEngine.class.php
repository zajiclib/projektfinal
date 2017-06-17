<?php

/* ========================================================================
   $File: $
   $Date: $
   $Revision: $
   $Creator: Roman $
   $Notice:
   ======================================================================== */


require_once("smarty-3.1.30/libs/Smarty.class.php");

class templateEngine
{

    private $smarty;
   
    public function &start()
    {
        
        $this->smarty = new Smarty();
        $this->smarty->template_dir = TEMPLATE_DIR;
        $this->smarty->compile_dir = COMPILE_DIR;
        $this->smarty->config_dir = CONFIG_DIR;
        //$this->smarty->cache_dir = CACHE_DIR; 
        //$this->smarty->cache = true;
        //$this->smarty->cache_lifetime = 60;
        return $this->smarty;
    }
}
