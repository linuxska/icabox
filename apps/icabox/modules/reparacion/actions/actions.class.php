<?php

/**
 * reparacion actions.
 *
 * @package    icabox
 * @subpackage reparacion
 * @author     Abraham Rafael Rico Moreno
 */
class reparacionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ReparacionIcaboxs = ReparacionIcaboxPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ReparacionIcaboxForm();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ReparacionIcabox = ReparacionIcaboxPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->ReparacionIcabox);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ReparacionIcaboxForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ReparacionIcabox = ReparacionIcaboxPeer::retrieveByPk($request->getParameter('id')), sprintf('Object ReparacionIcabox does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReparacionIcaboxForm($ReparacionIcabox);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ReparacionIcabox = ReparacionIcaboxPeer::retrieveByPk($request->getParameter('id')), sprintf('Object ReparacionIcabox does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReparacionIcaboxForm($ReparacionIcabox);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ReparacionIcabox = ReparacionIcaboxPeer::retrieveByPk($request->getParameter('id')), sprintf('Object ReparacionIcabox does not exist (%s).', $request->getParameter('id')));
    $ReparacionIcabox->delete();

    $this->redirect('reparacion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ReparacionIcabox = $form->save();

      $this->redirect('reparacion/edit?id='.$ReparacionIcabox->getId());
    }
  }
}
