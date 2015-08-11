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
			$this->response->redirect('/inpage');
		} else {
            $this->response->redirect('/login');
        } 
    }

    private function _loginSession($user)
    {

    	$this->session->set('user', array('id' => $user->id, 'name' => $user->fname));
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');
        
    }

}

