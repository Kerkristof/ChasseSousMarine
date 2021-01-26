<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Site;
use App\Form\SiteType;
use App\Repository\SiteRepository;

class SiteController extends AbstractController
{
    /**
     * [index description]
     * @Route("/site/index/{page}", name="site_index")
     * @param  integer        $page [description]
     * @param  SiteRepository $repo [description]
     * @return [type]               [description]
     */
    public function index($page = 1, SiteRepository $repo)
    {
      if ($page < 1)
      {
        $page = 1;
      }
      // DEFINI LA BORNE SUPERIEURE DE PAGINATION
      $nbParPage = 8;
      $nbTotal = $repo->nbSite(); // NOMBRE TOTAL DE SITE DANS LA TABLE
      if ($nbParPage * $page >= $nbTotal + $nbParPage)
      {
        $page -= 1;
      }
      $sites = $repo->findBy([],['nom' => 'ASC'], $nbParPage, ($page-1)*$nbParPage);
      return $this->render('site/index.html.twig', [
          'sites' => $sites,
          'page' => $page
      ]);
    }

    /**
     * [create description]
     * @Route("/site/new", name="site_new")
     * @Route("/site/edit/{id}", name="site_edit")
     * @param  [type]        $site    [description]
     * @param  ObjectManager $manager [description]
     * @param  Request       $request [description]
     * @return [type]                 [description]
     */
    public function create(Site $site = null, ObjectManager $manager, Request $request )
    {
      if(! $site)
      {
        $site = new Site;
        $site->setUser($this->getUser());
      }
      $form = $this->createForm(SiteType::class, $site);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form-> isValid())
      {
        $manager->persist($site);
        $manager->flush($site);
        return $this->RedirectToRoute('site_index');
      }
      return $this->render('site/site_edit.html.twig', [
        'formSite' => $form->createView(),
        'editMode' => $site-> getId() != null
      ]);
    }

    /**
     * [show description]
     * @Route("/site/show/{id}", name="site_show")
     * @param  Site   $site [description]
     * @return [type]       [description]
     */
    public function show(Site $site)
    {
      return $this->render('site/site_show.html.twig', [
        'site' => $site
      ]);
    }

    /**
     * [delete description]
     * @Route("/site/delete/{id}", name="site_delete")
     * @param  ObjectManager $manager [description]
     * @param  Site          $site    [description]
     * @return [type]                 [description]
     */
    public function delete(ObjectManager $manager, Site $site)
    {
      $manager->remove($site);
      $manager->flush();
      return $this->RedirectToRoute('site_index');
    }
}
