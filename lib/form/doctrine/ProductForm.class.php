<?php

/**
 * Product form.
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductForm extends BaseProductForm
{
  public function configure()
  {
      $this->widgetSchema['tracklist'] =  new sfWidgetFormTextareaTinyMCE(
      array(
        'width'=>550,
        'height'=>350,
        'config'=>'theme_advanced_disable: "anchor,cleanup,help"',
        'theme'   =>  sfConfig::get('app_tinymce_theme','advanced'),
      ),
      array(
        'class'   =>  'tiny_mce'
      )
    );
      
      $this->widgetSchema['description'] =  new sfWidgetFormTextareaTinyMCE(
      array(
        'width'=>550,
        'height'=>350,
        'config'=>'theme_advanced_disable: "anchor,cleanup,help"',
        'theme'   =>  sfConfig::get('app_tinymce_theme','advanced'),
      ),
      array(
        'class'   =>  'tiny_mce'
      )
    );
      
      $this->widgetSchema['type_product'] = new sfWidgetFormChoice(array('choices' => Product::getType()));
      
      unset($this['created_at'], $this['updated_at']);
  }
}
