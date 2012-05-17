<?php

/**
 * shop actions.
 *
 * @package    bwrecords
 * @subpackage shop
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class shopActions extends sfActions
{

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->products = Doctrine::getTable('product')->findAll();
  }

  public function executeShow(SfWebRequest $request)
  {
    $this->product = $this->getRoute()->getObject();
  }

  public function executeRelease(SfWebRequest $request)
  {
    $this->products = Doctrine::getTable('product')->findByTypeProduct(1);
    
  $q = Doctrine_Query::create()
    ->from('Product p')
    ->where('p.type_product = ?', 1);

    $this->pager = new sfDoctrinePager(
                    'Product',
                    sfConfig::get('app_max_items_on_page')
    );
    $this->pager->setQuery($q);
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }

  public function executeMerch(SfWebRequest $request)
  {
    $this->products = Doctrine::getTable('product')->findByTypeProduct(2);
    
    $q = Doctrine_Query::create()
    ->from('Product p')
    ->where('p.type_product = ?', 2);

    $this->pager = new sfDoctrinePager(
                    'Product',
                    sfConfig::get('app_max_items_on_page')
    );
    $this->pager->setQuery($q);
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }

}
