<?php

class CreateController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function newAction()
    {
    	$New = new News();

    	if($this->request->ispost())
    	{
    		$New->tittle=$this->request->getPost('tittle');
    		$New->author=$this->request->getPost('author');
    		$New->body=$this->request->getPost('body');
    		$New->save();
    	}
    }

}

