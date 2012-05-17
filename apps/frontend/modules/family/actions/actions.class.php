<?php

/**
 * family actions.
 *
 * @package    bwrecords
 * @subpackage family
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class familyActions extends sfActions
{

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->families = Doctrine::getTable('family')->findAll();
  }

  public function executeShow(SfWebRequest $request)
  {
    $this->family = $this->getRoute()->getObject();
  }
  
  public function executeArtist(SfWebRequest $request){
    $this->families = Doctrine::getTable('family')->findByTypeFamily(1);
    
        $q = Doctrine_Query::create()
    ->from('Family f')
    ->where('f.type_family = ?', 1);

    $this->pager = new sfDoctrinePager(
                    'Family',
                    sfConfig::get('app_max_items_on_page')
    );
    $this->pager->setQuery($q);
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
    
  }

    public function executePhoto(SfWebRequest $request){
    $this->families = Doctrine::getTable('family')->findByTypeFamily(2);
        
        $q = Doctrine_Query::create()
    ->from('Family f')
    ->where('f.type_family = ?', 2);

    $this->pager = new sfDoctrinePager(
                    'Family',
                    sfConfig::get('app_max_items_on_page')
    );
    $this->pager->setQuery($q);
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
    
  }
  
    public function executeGraph(SfWebRequest $request){
    $this->families = Doctrine::getTable('family')->findByTypeFamily(3);
        
        $q = Doctrine_Query::create()
    ->from('Family f')
    ->where('f.type_family = ?', 3);

    $this->pager = new sfDoctrinePager(
                    'Family',
                    sfConfig::get('app_max_items_on_page')
    );
    $this->pager->setQuery($q);
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
    
  }
  
}
