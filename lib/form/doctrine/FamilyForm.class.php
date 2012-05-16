<?php

/**
 * Family form.
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FamilyForm extends BaseFamilyForm
{
  public function configure()
  {
    
    $this->widgetSchema['pic'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'News pic',
                'file_src' => '/uploads/family/' . $this->getObject()->getPic(),
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'template' => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
            ));
    
    $this->validatorSchema['pic'] = new sfValidatorFile(array(
                'mime_types' => 'web_images',
                'path' => sfConfig::get('sf_upload_dir').'/family' ,
                'required' => false));
    
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
    
    $this->widgetSchema['link'] =  new sfWidgetFormTextareaTinyMCE(
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
    
    $this->widgetSchema['type_family'] = new sfWidgetFormChoice(array('choices' => Family::getType()));
    
    unset($this['created_at'], $this['updated_at']);
  }
  
  
}
