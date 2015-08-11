<?php

class InpageController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    	$name = $this->session->get('user');

    	$this->view->name = $name['name'];

    	$theNews = News::find(array('columns' => 'id, tittle, author, body'));
    	$this->view->theNews = $theNews;

    }

    public function editAction($editable)
    {
       $editarr = News::findFirst($editable);
     
       $this->view->tittle = $editarr->tittle;
    }

    public function modifyAction()
    {

    }

}

