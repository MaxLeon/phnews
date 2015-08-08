<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }


    public function registerAction()
    {


    	if ($this->request->ispost()) {

    		echo ($this->request->getPost('fname')) . ($this->request->getPost('lname'));
    		# code...
    	}




    }

}

