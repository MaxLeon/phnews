<?php
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
class CreateController extends \Phalcon\Mvc\Controller
{
    /**
     * Funcion encargada de insertar la noticia
     * @return null
     */
    public function indexAction()
    {

    }

    /**
     * Funcion encargada de insertar la noticia
     * @return null
     */
    public function newAction()
    {
        $New = new News();

        if ($this->request->isPost()) {

            $New->tittle=$this->request->getPost('tittle', "string");
            $New->author=$this->request->getPost('author', "string");
            $New->body=$this->request->getPost('body', "string");
            $New->save();
            $this->response->redirect('/inpage');
        }
    }

}

