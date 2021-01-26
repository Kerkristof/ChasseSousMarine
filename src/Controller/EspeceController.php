<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Espece;
use App\Entity\BlogComment;
use App\Entity\Sortie;
use App\Entity\User;
use App\Entity\Site;
use App\Repository\EspeceRepository;
use App\Repository\BlogCommentRepository;
use App\Repository\UserRepository;
use App\Repository\SortieRepository;
use App\Repository\SiteRepository;
use App\Form\EspeceType;

class EspeceController extends AbstractController
{

  /**
  * @Route("/",name="home")
  */
  public function home(SiteRepository $repo_site, EspeceRepository $repo_espece, BlogCommentRepository $repo_blog_comment,
  UserRepository $repo_user, SortieRepository $repo_sortie)
  {
    // RENVOIE LE 4 DERNIERES SORTIES
    $sorties = $repo_sortie->findBy([],['created_at' => 'DESC'],4);
    // RENVOIE LES 3 DERNIERS COMMENTAIRES
    $blog_comments = $repo_blog_comment->findBy([],['createdAt' => 'DESC'],3);
    //  RENVOIE LE NOMBRE DE USER DANS LA BASE
    $users = $repo_user ->nbUser();
    //  RENVOIE LE NOMBRE D ESPECE DANS LA BASE
    $especes = $repo_espece ->nbEspece();
    //  RENVOIE LE NOMBRE DE SITE DANS LA BASE
    $sites = $repo_site->nbSite();

    return $this->render('espece/home.html.twig',[
      'blog_comments' => $blog_comments,
      'sorties' => $sorties,
      'users' => $users,
      'especes' => $especes,
      'sites' => $sites
    ]);
  }

  /**
   * @Route("/espece/index/{page}", name="espece_index")
   * @param  integer          $page        [description]
   * @param  EspeceRepository $repo_espece [description]
   * @return [type]                        [description]
   */
  public function index($page = 1, EspeceRepository $repo)
  {
      if ($page < 1)
      {
        $page = 1;
      }
      // DEFINI LA BORNE SUPERIEURE DE PAGINATION
      $nbParPage = 8;
      $nbTotal = $repo->nbEspece(); // NOMBRE TOTAL D ESPECE DANS LA TABLE
      if ($nbParPage * $page >= $nbTotal + $nbParPage)
      {
        $page -= 1;
      }
      $especes = $repo->findBy([],['nom' => 'ASC'], $nbParPage, ($page-1)*$nbParPage);
      return $this->render('espece/index.html.twig', [
          'especes' => $especes,
          'page' => $page
      ]);
  }

  /**
   * [create description]
   * @Route("/espece/new", name="espece_create")
   * @Route("/espece/edit/{id}", name="espece_edit")
   * @param  Espece        $espece  [description]
   * @param  Request       $request [description]
   * @param  ObjectManager $manager [description]
   * @return [type]                 [description]
   */
  public function create(Espece $espece = null, Request $request, ObjectManager $manager)
  {
    if(!$espece)
    {
      $espece = new Espece;
      $espece->setAuteur($this->getUser());
      $espece->setImageSize(100);
    }

    $form = $this->createForm(EspeceType::class, $espece);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form-> isValid())
    {
      $manager->persist($espece);
      $manager->flush($espece);
      return $this->RedirectToRoute('espece_index');
    }
    return $this->render('espece/espece_edit.html.twig', [
      'formEspece' => $form->createView(),
      'editMode' => $espece-> getId() != null
    ]);
  }

  /**
   * [show description]
   * @Route("/espece/show/{id}", name="espece_show")
   * @param  Espece $espece [description]
   * @return [type]         [description]
   */
  public function show(Espece $espece)
  {
    return $this->render('espece/espece_show.html.twig', [
      'espece' => $espece
    ]);
  }


  /**
   * @Route("/espece/delete/{id}", name="espece_delete")
   * @param  ObjectManager $manager [description]
   * @param  Espece        $espece  [description]
   * @return [type]                 [description]
   */
  public function delete(ObjectManager $manager, Espece $espece)
  {
    $manager->remove($espece);
    $manager->flush();
    return $this->RedirectToRoute('espece_index');
  }

}
