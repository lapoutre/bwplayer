<?php

/**
 * news actions.
 *
 * @package    bwrecords
 * @subpackage news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->news = Doctrine::getTable('article')->findAll();

    $this->pager = new sfDoctrinePager(
                    'Article',
                    sfConfig::get('app_max_items_on_news')
    );
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
    
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->article = $this->getRoute()->getObject();
    
    $id = $this->article->getId();
    
    $this->comments = Doctrine::getTable('comment')->findByArticleId($id);
    
  }

}
