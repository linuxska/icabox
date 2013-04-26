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

      $this->redirect('icabox/index');
    }
  }
   public function executeFilter(sfWebRequest $request)
  {
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@icabox');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@icabox');
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->setTemplate('index');
  }
  protected function getFilters()
  {
    return $this->getUser()->getAttribute('icabox.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('icabox.filters', $filters, 'admin_module');
  }

protected function buildCriteria()
  {
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $criteria = $this->filters->buildCriteria($this->getFilters());

    $this->addSortCriteria($criteria);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_criteria'), $criteria);
    $criteria = $event->getReturnValue();

    return $criteria;
  }
}
