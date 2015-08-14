<?php namespace App\Controllers;
use \Phalcon\Mvc\Controller;
use App\Models\Users;
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
class LoginController extends Controller
{
    public function indexAction()
    {
        $err="";
        $this->view->err=$err;

        if ($this->request->isPost()) {

            $username = $this->request->getPost('uname');
            $password = $this->request->getPost('pass');

            $user = Users::findFirst(["uname = :username:", 'bind' => ['username' => $username]]);
            
            if ($user) {

                if ($this->security->checkHash($password, $user->pass)) {

                    $this->loginSession($user);
                    $this->response->redirect('/inpage');
                } else {

                    $this->flash->notice("Wrong User or Password");
                    die();
                    $err="Wrong User or Password";
                    $this->view->err=$err;
                }
            }
        }
    }

    /**
     * Funcion encargada de verificar la autenticidad del usuario
     */
    public function logAction()
    {
        
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

