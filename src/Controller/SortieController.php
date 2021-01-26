<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ObjectManager;
use App\Repository\SiteRepository;
use App\Repository\PriseRepository;
use App\Repository\SortieRepository;
use App\Repository\EspeceRepository;
use App\Repository\UserRepository;
use App\Entity\Sortie;
use App\Entity\Espece;
use App\Entity\Prise;
use App\Entity\Site;
use App\Form\SortieType;
use App\Form\PriseType;


class SortieController extends AbstractController
{
  /**
   * @Route("/sortie/index/{site_id}/{page}", name="sortie_index")
   * @param  [type]         $site_id   [description]
   * @param  SiteRepository $site_repo [description]
   * @return [type]                    [description]
   */
  public function index($site_id, $page = 1, SiteRepository $site_repo, SortieRepository $repo)
  {
      $site = $site_repo->find($site_id);
      if ($page < 1)
      {
        $page = 1;
      }
      // DEFINI LA BORNE SUPERIEURE DE PAGINATION
      $nbParPage = 8;
      $nbTotal = $repo->nbSortie($site); // NOMBRE TOTAL DE SORTIE DANS LA TABLE SUR CE SITE
      if (! $nbTotal)
      {
        return $this->RedirectToRoute('site_index');
      }
      if ($nbParPage * $page >= $nbTotal + $nbParPage)
      {
        $page -= 1;
      }
      $sorties = $repo->findBy(['site' => $site],['created_at' => 'DESC'], $nbParPage, ($page-1)*$nbParPage);
      return $this->render('sortie/index.html.twig', [
          'sorties' => $sorties,
          'site_id' => $site_id,
          'page' => $page
      ]);
  }

  /**
  * @Route("sortie/show/{id}", name="sortie_show")
   * [show description]
   * @param  Sortie           $sortie      [description]
   * @param  ObjectManager    $manager     [description]
   * @param  Request          $request     [description]
   * @param  EspeceRepository $espece_repo [description]
   * @return [type]                        [description]
   */
  public function show(Sortie $sortie, ObjectManager $manager, Request $request, EspeceRepository $espece_repo,
  UserRepository $user_repo)
  {
    // AJOUT D UNE NOUVELLE PRISE!
    $prise = new Prise();
    $prise->setSortie($sortie);

    // LISTE DES ESPECES
    $especes = $espece_repo->findAll();

    $prise_form = $this->createForm(PriseType::class, $prise, [
      'especeList' => $especes
    ]);

    $prise_form->handleRequest($request);
    if($prise_form->isSubmitted() && $prise_form->isValid())
    {
      $manager->persist($prise);
      $manager->flush();
    }
    return $this->render('sortie/sortie_show.html.twig', [
      'sortie' => $sortie,
      'especeList' => $especes,
      'formPrise' => $prise_form->createView(),
      'user_is_admin' => $user_repo->userIsAdmin($this->getUser())
    ]);
  }

    /**
     * @Route("/sortie/new/{site_id}", name="sortie_new")
     * @Route("/sortie/edit/{site_id}/{id}", name="sortie_edit")
     * @param  Sortie        $sortie  [description]
     * @param  ObjectManager $manger  [description]
     * @param  Request       $request [description]
     * @return [type]                 [description]
     */
    public function create($site_id, Sortie $sortie = null, ObjectManager $manager, Request $request, SiteRepository $site_repo)
    {
      $site = $site_repo->find($site_id);
      if (! $sortie) {
        $sortie = new sortie;
        $sortie ->setAuteur($this->getUser())
                // ->setCreatedAt(new \DateTime())
                ->setSite($site);
      }
      $form = $this->createForm(SortieType::class, $sortie);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form-> isValid())
      {
        $manager->persist($sortie);
        $manager->flush();
        return $this->RedirectToRoute('site_index');
      }

      return $this->render('/sortie/sortie_edit.html.twig', [
        'formSortie' => $form->createView(),
        'editMode' => $sortie-> getId() != null
      ]);
    }

    /**
     * @Route("/sortie/delete/{id}", name="sortie_delete")
     * @param  Sortie        $sortie  [description]
     * @param  ObjectManager $manager [description]
     * @return [type]                 [description]
     */
    public function delete(Sortie $sortie, ObjectManager $manager, UserRepository $user_repo)
    {
      $user = $this->getUser();
      if ($user == $sortie->getAuteur() || $user_repo->userIsAdmin($user)) {
        $manager->remove($sortie);
        $manager->flush();
      }
      return $this->RedirectToRoute('sortie_index', [
        'site_id' => $sortie->getSite()->getId()
      ]);
    }

    /**
     * @Route("/prise/delete/{id}", name="prise_delete")
     * @param  Prise           $prise   [description]
     * @param  ObjectManager   $manager [description]
     * @param  PriseRepository $repo    [description]
     * @return [type]                   [description]
     */
    public function priseDelete(Prise $prise, ObjectManager $manager, PriseRepository $repo)
    {
      $sortie = $prise->getSortie();
      $manager->remove($prise);
      $manager->flush();
      return $this->RedirectToRoute('sortie_show', [
        'id' => $sortie->getId()
      ]);
    }

    /**
     * return sortie from connected user
     * @return [type] [description]
     * @Route("/sortie/mine", name="sortie_mine")
     */
    public function mine(SortieRepository $repo, UserRepository $user_repo)
    {
      $user = $this->getUser();
      $sorties = $repo->findBy(['auteur' => $user],['created_at' => 'DESC']);
      return $this->render('/sortie/sortie_mine.html.twig', [
        'sorties' => $sorties
      ]);
    }
}
