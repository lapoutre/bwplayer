<?php

/**
 * comment form base class.
 *
 * @method comment getObject() Returns the current form's model object
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasecommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nick'        => new sfWidgetFormInputText(),
      'message'     => new sfWidgetFormTextarea(),
      'is_approved' => new sfWidgetFormInputCheckbox(),
      'news_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('news'), 'add_empty' => false)),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nick'        => new sfValidatorString(array('max_length' => 255)),
      'message'     => new sfValidatorString(),
      'is_approved' => new sfValidatorBoolean(array('required' => false)),
      'news_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('news'))),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'comment';
  }

}
