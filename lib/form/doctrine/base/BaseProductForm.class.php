<?php

/**
 * Product form base class.
 *
 * @method Product getObject() Returns the current form's model object
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'tracklist'    => new sfWidgetFormTextarea(),
      'release_date' => new sfWidgetFormInputText(),
      'pic'          => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'soundcloud'   => new sfWidgetFormInputText(),
      'prix'         => new sfWidgetFormInputText(),
      'family_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Family'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'slug'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255)),
      'tracklist'    => new sfValidatorString(),
      'release_date' => new sfValidatorString(array('max_length' => 255)),
      'pic'          => new sfValidatorString(array('max_length' => 255)),
      'description'  => new sfValidatorString(),
      'soundcloud'   => new sfValidatorString(array('max_length' => 255)),
      'prix'         => new sfValidatorString(array('max_length' => 255)),
      'family_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Family'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Product', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

}
