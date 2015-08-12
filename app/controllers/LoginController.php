<?php
/**
 * Clase de la pagina de login
 *
 * @category Login
 *
 * @package Controllers
 *
 * @author Maximo De Leon <maximo@mctekk.com>
 *
 * @link http://phnews.com/login
 */
class LoginController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {

    }

    /**
     * Funcion encargada de verificar la autenticidad del usuario
     */
    public function logAction()
    {
        $username = $this->request->getPost('uname');
        $password = $this->request->getPost('pass');

        $user = Users::findFirst(array("uname = :username: AND pass = :password:", 'bind' => array('username' => $username, 'password' => sha1($password))));

        if ($user != false) {
            $this->loginSession($user);
            $this->response->redirect('/inpage');
        } else {
            $this->response->redirect('/login');
        }
    }

    /**
     * Funcion encargada de editar los modelos de las noticias
     * @param model $user id de la noticia a borrar
     * @return null
     */
    private function loginSession($user)
    {
        $this->session->set('user', array('id' => $user->id, 'name' => $user->fname));
    }

    /**
     * Funcion encargada de eliminar la session del usuario
     * @return null
     */
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');
    }
}

