<?php

session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author Bryan's Workplace
 */
class sessionDestroy {

    function __construct() {
        sessionDestroy::destroy();
        sessionDestroy::redirect();
        
    }

    public static function destroy() {
        return session_destroy();
        
    }

    public static function redirect() {
        header('location: ../../index.php');
    }

}

$sessionDest = new sessionDestroy();
?>
