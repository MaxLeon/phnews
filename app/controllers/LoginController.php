<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }


    public function logAction()
    {
    	$username = $this->request->getPost('uname');
    	$password = $this->request->getPost('pass');
    	
    	
    	$user = Users::findFirst(array(
    	"uname = :username: AND pass = :password:",
    	'bind' => array('username' => $username, 'password' => sha1($password))
		));

		if ($user != false) 
		{
			$this->_loginSession($user);
			$this->dispatcher->forward(array('controller'=>'inpage', 'action'=>'index'));
		} else {
            $err = 
            $this->view->err = "Wrong username or password";
        } 
    }

    private function _loginSession($user)
    {

    	$this->session->set('user', array('id' => $user->id, 'name' => $user->fname));
    }

}

