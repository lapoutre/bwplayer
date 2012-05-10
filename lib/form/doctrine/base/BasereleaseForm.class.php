<?php

/**
 * release form base class.
 *
 * @method release getObject() Returns the current form's model object
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasereleaseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'family_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('family'), 'add_empty' => false)),
      'name'         => new sfWidgetFormInputText(),
      'tracklist'    => new sfWidgetFormTextarea(),
      'release_date' => new sfWidgetFormInputText(),
      'pic'          => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'soundcloud'   => new sfWidgetFormInputText(),
      'prix'         => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'family_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('family'))),
      'name'         => new sfValidatorString(array('max_length' => 255)),
      'tracklist'    => new sfValidatorString(),
      'release_date' => new sfValidatorString(array('max_length' => 255)),
      'pic'          => new sfValidatorString(array('max_length' => 255)),
      'description'  => new sfValidatorString(),
      'soundcloud'   => new sfValidatorString(array('max_length' => 255)),
      'prix'         => new sfValidatorString(array('max_length' => 255)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('release[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'release';
  }

}
