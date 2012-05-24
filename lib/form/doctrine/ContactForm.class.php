<?php

/**
 * Contact form.
 *
 * @package    bwrecords
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactForm extends BaseContactForm {

    public function configure() {
        $this->widgetSchema['type_contact'] = new sfWidgetFormChoice(array(
                    'choices' => Contact::getType(),
                    'expanded' => true,
                ));

        $this->validatorSchema['type_contact'] = new sfValidatorChoice(array(
                    'choices' => array_keys(Contact::getType()),
                ));

        unset(
                $this['created_at'], $this['updated_at']
        );
    }

}
