<?php

/**
 * Created by PhpStorm.
 * User: roger.kikkas
 * Date: 17.01.2017
 * Time: 14:40
 */
class http
{// http class begin
    // class variables
    var $server = array(); // server data
    var $vars = array(); // http data
    var $cookie = array(); // cookie data
    // class methods
    // initialize class variables and set up real data
    function init(){
        $this->server = $_SERVER; // server real data
        $this->cookie = $_COOKIE; // cookie real data
        $this->vars = array_merge($_GET, $_POST, $_FILES); // http real data
    }// init
    // initialize some server constants
    function initConst(){
        // define array with some server element names
        $vars = array('REMOTE_ADDR', 'PHP_SELF', 'SCRIPT_NAME', 'HTTP_HOST');
        // control is constant defined for each constant name
        foreach ($vars as $var){
            if(!defined($var) and isset($this->server[$var])){
                define($var, $this->server[$var]);
            }// if
        }// foreach
    }// initConst
}//http class end
?>