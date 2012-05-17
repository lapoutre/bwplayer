<?php

/**
 * Article form.
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArticleForm extends BaseArticleForm
{
  public function configure()
  {
    
    $this->widgetSchema['pic'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'News pic',
                'file_src' => '/uploads/news/' . $this->getObject()->getPic(),
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'template' => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
            ));
    
    $this->validatorSchema['pic'] = new sfValidatorFile(array(
                'mime_types' => 'web_images',
                'path' => sfConfig::get('sf_upload_dir').'/news' ,
                'required' => false));
    
    $this->widgetSchema['body'] =  new sfWidgetFormTextareaTinyMCE(
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
    unset($this['created_at'], $this['updated_at']);
  }
  
  
}
