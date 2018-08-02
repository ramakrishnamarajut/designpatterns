<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class sessionSingleton
{
    private static $instance = NULL;
    
    public $session = NULL;


    private function __construct(){
        $this->session = ($this->session == NULL )?"Vikram":"Already logged in";
    }
    
    public static function getSession(){
        if(!self::$instance){
            self::$instance = new sessionSingleton();
        }
        return self::$instance;
    }
    
    public function areYouLoggedIn(){
        return $this->session;
    }
    
}

$f = sessionSingleton::getSession();
$c = $f->areYouLoggedIn();
var_dump($c);

$f = sessionSingleton::getSession();
$c = $f->areYouLoggedIn();
var_dump($c);