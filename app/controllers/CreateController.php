<?php namespace App\Controllers;
use \Phalcon\Mvc\Controller;
use App\Models\News;
/**
 * Clase representativa del controlador en cargado de crear las noticias
 *
 * @category Create
 *
 * @package Controllers
 *
 * @author Maximo De Leon <maximo@mctekk.com>
 *
 * @link http://phnews.com/create
 */
class CreateController extends Controller
{
    /**
     * Funcion encargada de insertar la noticia
     * @return null
     */
    public function indexAction()
    {

        $New = new News();
        $err="";
        $this->view->err=$err;

        if ($this->request->isPost()) {

            switch ($this->request->getPost('create')) {
                case 'Create':

                $New->tittle=$this->request->getPost('tittle', "string");
                $New->author=$this->request->getPost('author', "string");
                $New->body=$this->request->getPost('body', "string");
                if (!$New->save()) {

                    $err="All the fields are required";
                    $this->view->err=$err;

                } else {

                    $this->response->redirect('/inpage');
                }
                    
                    break;

                case 'Cancel':
                        $this->response->redirect('/inpage');
                    break;
            }
            
        }

    }

    /**
     * Funcion encargada de insertar la noticia
     * @return null
     */
    public function newAction()
    {

    }

}

