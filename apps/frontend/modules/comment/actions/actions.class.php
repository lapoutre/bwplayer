<?php

/**
 * comment actions.
 *
 * @package    bwrecords
 * @subpackage comment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeForm(sfWebRequest $request)
  {
    $this->form = new CommentForm();
    $this->news_id = $request->getParameter('id');
    
        if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        $this->form->save($request->getParameter('id'));
        $this->forward('comment', 'comment');
      }
      $this->getUser()->setFlash('error', 'Veuillez vérifier votre saisie.');
    }
  }
  
  public function executeComment(sfWebRequest $request){
      
  }
}
