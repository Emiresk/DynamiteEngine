<?php

namespace Core\Application\Library\Router;

class Router
{
    private $_url;

    private $_defaultDestination = '/index';

    private $_currentPage = '';

    public function __construct()
    {
        $this->_url = $_SERVER['REQUEST_URI'];

        $this->runRouter();
    }

    private function runRouter()
    {
        if ( $this->_url == '/' )
        {
            //Requests::Instance()->Redirect(
                $this->_defaultDestination
            );
        }

        if ( !empty ( $this->_url ))
        {
            //$this->_currentPage = Uri::EscapeUrl( $this->_url );

            //ContentModel::Instance()->ShowCurrentPage( $this->_currentPage );
        }
    }
}