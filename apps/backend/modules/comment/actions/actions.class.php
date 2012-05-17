<?php

require_once dirname(__FILE__).'/../lib/commentGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/commentGeneratorHelper.class.php';

/**
 * comment actions.
 *
 * @package    bwrecords
 * @subpackage comment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentActions extends autoCommentActions
{
  
  public function executeListSetApprove(sfWebRequest $request){
    
    $comment = $this->getRoute()->getObject();

    // setting the product online
    $comment->setIsApproved(true);
    $comment->save();

    $this->getUser()->setFlash('notice', 'The comment has been approved');
    $this->redirect('@comment');
    
  }
  
}
