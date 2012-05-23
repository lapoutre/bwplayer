<?php

/**
 * contact actions.
 *
 * @package    bwrecords
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->form = new ContactForm();

        if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
            if ($this->form->isValid()) {
                $this->form->save();
                $this->email = null;
                $values = $this->form->getValues();
                switch ((int)$values["type_contact"]) {
                    case 1:
                        $this->email = "contact@brainwasherrecords.com";
                        break;
                    case 2:
                        $this->email = "management@brainwasherrecords.com";
                        break;
                    case 3:
                        $this->email = "squirhell@gmail.com";
                        break;
                    case 4:
                        $this->email = "etienne.brinon@gmail.com";
                        break;
                }
                $message = $this->getMailer()->compose(
                        array('auto-reply@brainwasherrecords.com' => 'Natasha [Bot Maling][www.BrainWasherRecords.com]'), $this->email, 'Demmande de contact', <<<EOF
Hi, this user want to speak with you.

His email address : {$values["email"]}
His message : 

"{$values["message"]}"



---------------------------------------------------------
Okay i'm looking great but please, don't reply to this mail.

Have a nice day.
Natasha, your slave.
EOF
                );

                $this->getMailer()->send($message);

                $this->forward('contact', 'contact');
            }
            $this->getUser()->setFlash('error', 'Veuillez vérifier votre saisie.');
        }
    }

    public function executeContact(sfWebRequest $request) {
        
    }

}
