<?php

/**
 * Product filter form base class.
 *
 * @package    bwrecords
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tracklist'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'release_date' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pic'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'soundcloud'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prix'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'family_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Family'), 'add_empty' => true)),
      'type_product' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'tracklist'    => new sfValidatorPass(array('required' => false)),
      'release_date' => new sfValidatorPass(array('required' => false)),
      'pic'          => new sfValidatorPass(array('required' => false)),
      'description'  => new sfValidatorPass(array('required' => false)),
      'soundcloud'   => new sfValidatorPass(array('required' => false)),
      'prix'         => new sfValidatorPass(array('required' => false)),
      'family_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Family'), 'column' => 'id')),
      'type_product' => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'tracklist'    => 'Text',
      'release_date' => 'Text',
      'pic'          => 'Text',
      'description'  => 'Text',
      'soundcloud'   => 'Text',
      'prix'         => 'Text',
      'family_id'    => 'ForeignKey',
      'type_product' => 'Text',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'slug'         => 'Text',
    );
  }
}
