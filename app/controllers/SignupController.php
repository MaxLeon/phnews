<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }


    public function signAction()
    {

    	$User = new Users();


    	if ($this->request->ispost()) {

    		$User->uname=$this->request->getPost('uname');    		
    		$User->fname=$this->request->getPost('fname');
    		$User->lname=$this->request->getPost('lname');
    		$User->pass=sha1($this->request->getPost('pass'));
    		$User->save();    		
    	}

    }
}

