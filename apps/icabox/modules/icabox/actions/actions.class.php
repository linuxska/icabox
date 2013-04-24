<?php

/**
 * icabox actions.
 *
 * @package    icabox
 * @subpackage icabox
 * @author     Your name here
 */
class icaboxActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Icaboxs = IcaboxPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new IcaboxForm();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Icabox = IcaboxPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Icabox);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new IcaboxForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Icabox = IcaboxPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Icabox does not exist (%s).', $request->getParameter('id')));
    $this->form = new IcaboxForm($Icabox);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Icabox = IcaboxPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Icabox does not exist (%s).', $request->getParameter('id')));
    $this->form = new IcaboxForm($Icabox);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Icabox = IcaboxPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Icabox does not exist (%s).', $request->getParameter('id')));
    $Icabox->delete();

    $this->redirect('icabox/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Icabox = $form->save();

      $this->redirect('icabox/edit?id='.$Icabox->getId());
    }
  }
}
