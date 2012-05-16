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
  
    public function executeRelease(SfWebRequest $request){
    $this->products = Doctrine::getTable('product')->findByTypeProduct(1);
  }
  
    public function executeMerch(SfWebRequest $request){
    $this->products = Doctrine::getTable('product')->findByTypeProduct(2);
  }  

}
