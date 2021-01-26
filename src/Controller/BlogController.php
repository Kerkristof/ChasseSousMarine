<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\BlogComment;
use App\Repository\BlogCommentRepository;
use App\Form\BlogCommentType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{

  /**
   * API TEST RENVOYANT LES COMMENTAIRES ENREGISTREES DS LA BASE
   * @Route("/api/comments", name="api_comments", methods={"GET"})
   * @param  BlogCommentRepository $repo       [description]
   * @param  NormalizerInterface   $normalizer [description]
   * @return [type]                            [description]
   */
  public function apiBlogComment(BlogCommentRepository $repo, NormalizerInterface $normalizer)
  {
    $comments = $repo->findBy([],['createdAt' => 'DESC'],5);

    $commentsNormalises = $normalizer->normalize($comments, null, ['groups' => 'comment:read']);

    $json = json_encode($commentsNormalises);

    $response = new Response($json, 200, [
      "Content-Type" => "application/json"
    ]);

    return $response;
  }
    /**
     * [index description]
     * @Route("/blog/{page}", name="blog")
     * @param  BlogCommentRepository $repo    [description]
     * @param  Request               $request [description]
     * @param  ObjectManager         $manager [description]
     * @return [type]                         [description]
     */
    public function index($page = 1, BlogCommentRepository $repo, Request $request, ObjectManager $manager)
    {
      if ($page < 1)
      {
        $page = 1;
      }
      // DEFINI LA BORNE SUPERIEURE DE PAGINATION
      $nbParPage = 10; //NOMBRE DE COMMENTAIRES PAR PAGE
      $nbTotal = $repo->nbBlogComment(); // NOMBRE TOTAL DE COMMENTAIRES DANS LA TABLE
      if ($nbParPage * $page >= $nbTotal + $nbParPage)
      {
        $page -= 1;
      }
      $blog_comments = $repo->findBy([],['createdAt' => 'DESC'],$nbParPage, ($page-1)*$nbParPage);

      // AJOUTER UN COMMENTAIRE
      $blog_comment = new BlogComment();
      $blog_comment ->setAuteur($this->getUser())
                    ->setCreatedAt(new \DateTime());
      $form = $this->createForm(BlogCommentType::class, $blog_comment);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form-> isValid())
      {
        $manager->persist($blog_comment);
        $manager->flush();
        return $this->RedirectToRoute('blog');
      }

      return $this->render('blog/index.html.twig', [
          'blog_comments' => $blog_comments,
          'page' => $page,
          'formBlog' => $form->createView()
      ]);
    }

    /**
     * @Route("/blog/delete/{id}", name="blog_comment_delete")
     * @var [type]
     */
    public function delete(BlogComment $blog_comment, ObjectManager $manager)
    {
      $manager->remove($blog_comment);
      $manager->flush();
      return $this->RedirectToRoute('blog');

    }
}
