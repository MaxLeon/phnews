<?php
/**
 * Clase de la pagina principal
 *
 * @category Inpage
 *
 * @package Controllers
 *
 * @author Maximo De Leon <maximo@mctekk.com>
 *
 * @link http://phnews.com/inpage
 */
class InpageController extends \Phalcon\Mvc\Controller
{
    /**
     * Funcion encargada de cargar los modelos de las noticias
     * 
     *@return null
     */
    public function indexAction()
    {

        $name = $this->session->get('user');

        $this->view->name = $name['name'];

        $theNews = News::find(('columns' => 'id, tittle, author, body'));
        $this->view->theNews = $theNews;

    }

    /**
     * Funcion encargada de editar los modelos de las noticias
     * @param int $editable id de la noticia a borrar
     * @return null
     */
    public function editAction($editable)
    {
        $editarr = News::findFirst($editable);

        if ($this->request->isPost()) {
            switch ($this->request->getPost('edit')) {
           
            case 'Ok':
                $editarr->tittle=$this->request->getPost('tittle', "string");
                $editarr->author=$this->request->getPost('author', "string");
                $editarr->body=$this->request->getPost('body', "string");
                $editarr->id=$this->request->getPost('id');
                $editarr->save();
                $this->response->redirect('/inpage');         
                break;

            case 'Cancel':
                $this->response->redirect('/inpage');   
                break;
                    
            default:
            
                break;
            }

        } else {

                $this->view->id = $editarr->id;
                $this->view->tittle = $editarr->tittle;
                $this->view->author = $editarr->author;
                $this->view->body = $editarr->body;
        }
    }

    /**
     * Funcion encargada de borrar las noticias
     * @param int $deletable id de la noticia a borrar
     * @return null
     */
    public function delAction($deletable)
    {
         $delarr = News::findFirst($deletable);

        if ($delarr!=false) {
            $delarr->delete();
        }
          $this->response->redirect('/inpage');
    }
}

