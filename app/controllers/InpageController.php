<?php

class InpageController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    	$name = $this->session->get('user');

    	$this->view->name = $name['name'];

    }

}

