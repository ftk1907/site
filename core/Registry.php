<?php

namespace core;

/**
* Loads and registers classes, views, controllers.
*/
class Registry
{
    private static $registry        = null;
    private $controllers            = array();
    private $models                 = array();
    
    private function __construct()
    {
        
    }

    public static function getInstance()
    {
        if(!self::$registry) {
            self::$registry = new Registry();
        } 
        return self::$registry;
    }

    public function controller($class, array $args = null)
    {
        if(!array_key_exists($class, $this->models)){
            if(class_exists($class)){
                $controllers[$class] = new $class($args);
            }
        }
        return $controllers[$class];
    }

    public function model($class, array $args = array())
    {
        if(!array_key_exists($class, $this->models)){
            if(class_exists($class)){
                $this->models[$class] = new $class($args);
            }
        }
        return $this->models[$class];
    }

    public function view($path, array $vars = array())
    {
        $final_path = "views/" . $path . ".php";
        
        if(file_exists($final_path)){
            include $final_path;
        }
    }
}