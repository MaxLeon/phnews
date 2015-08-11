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
            
            if ($this->request->isPost()) {

                switch ($this->request->getPost('edit')) {
                    
                    case 'Ok':
                        
                        $editarr->tittle=$this->request->getPost('tittle');
                        $editarr->author=$this->request->getPost('author');
                        $editarr->body=$this->request->getPost('body');
                        $editarr->id=$this->request->getPost('id');
                        $editarr->save();
                        $this->response->redirect('/inpage');
                        
                        
                    break;

                    case 'Cancel':

                        $this->response->redirect('/inpage');
                            
                    break;
                    
                    default:
                        # code...
                        break;
                }
                    
                    
                    
                                

            } else {
            
                
                $this->view->id = $editarr->id;
                $this->view->tittle = $editarr->tittle;
                $this->view->author = $editarr->author;
                $this->view->body = $editarr->body;
                
            }
    }

    public function delAction($deletable)
    {
         $delarr = News::findFirst($deletable);

         if ($delarr!=false) {

            $delarr->delete();
         }
          $this->response->redirect('/inpage');
    }
}

