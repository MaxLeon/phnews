<?php use Phalcon\Mvc\Controller;
/**
 * Clase de la pagina de registro
 *
 * @category Singup
 *
 * @package Controllers
 *
 * @author Maximo De Leon <maximo@mctekk.com>
 *
 * @link http://phnews.com/singup
 */
class SignupController extends Controller
{
    /**
     * Funcion index
     * @return null
     */
    public function indexAction()
    {

    }

    /**
     * Funcion encargada de tomar los datos del usuario para el registro
     * @return null
     */
    public function signAction()
    {
        $User = new Users();

        if ($this->request->isPost()) {
            $User->uname=$this->request->getPost('uname');
            $User->fname=$this->request->getPost('fname');
            $User->lname=$this->request->getPost('lname');
            $User->pass=sha1($this->request->getPost('pass'));
            $User->save();
            $this->response->redirect('/login');
        }
    }
}

