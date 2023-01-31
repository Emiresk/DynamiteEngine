<?php

// If a dev side -> E_ALL
// If a prod side -> You can comment this method

error_reporting( E_ALL );


DEFINE ( "DS", DIRECTORY_SEPARATOR );

DEFINE ( "ROOT_DIR", dirname(__FILE__). DS );
DEFINE ( "GIT_DIR", ROOT_DIR . ".git" . DS );
DEFINE ( "MODULES", ROOT_DIR . "modules" . DS );

DEFINE ('VIEW',  'view' . DS );

    /**
     *
     *  Autoloader
     *
     */

    spl_autoload_register(
        function ( $ClassName ) {
            $classFile = PUBLIC_DIR . str_replace( '\\', DS , $ClassName ) . ".php";
            (file_exists( $classFile  ))
                ? require_once $classFile
                : die( "Cannot find class file on the path ==> {$classFile} \n");
        }
    );