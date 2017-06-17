<?php

class redirect
{
    public function __construct($location)
    {
        header("Location:".$location); 
    }
}
