<?php
 
 
namespace Edeli\SiteBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class SiteController extends Controller
{
  public function accueilAction()
  {
    return $this->render('EdeliSiteBundle:Site:accueil.html.twig');
  }
  public function equipeAction()
  {
    return $this->render('EdeliSiteBundle:Site:equipe.html.twig');
  }
  public function realisationsAction()
  {
    return $this->render('EdeliSiteBundle:Site:realisations.html.twig');
  }
  public function presentationAction()
  {
    return $this->render('EdeliSiteBundle:Site:presentation.html.twig');
  }
  public function contactAction()
  {
    return $this->render('EdeliSiteBundle:Site:contact.html.twig');
  }
  public function competencesAction()
  {
    return $this->render('EdeliSiteBundle:Site:competences.html.twig');
  }
}