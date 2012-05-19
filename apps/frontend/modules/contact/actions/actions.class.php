<?php

/**
 * contact actions.
 *
 * @package    bwrecords
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new ContactForm();

    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      if ($this->form->isValid()) {
        //Mail creation
        $mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

//Message creation
        $message = Swift_Message::newInstance('Subject')
                ->setFrom(array($this->form['email'] => 'Username'))
                ->setTo(array('timotheroche@gmail.com' => 'Receiver name'))
                ->setBody($this->form['message'])
        ;

//Send the email
        $mailer->send($message);
        $this->form->save();
        $this->forward('contact', 'contact');
      }
      $this->getUser()->setFlash('error', 'Veuillez vérifier votre saisie.');
    }
  }

  public function executeContact(sfWebRequest $request)
  {
    
  }

}
