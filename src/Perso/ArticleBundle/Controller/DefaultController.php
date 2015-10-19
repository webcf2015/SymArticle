<?php

namespace Perso\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    // pas de variables get pour l'accueil
    public function indexAction()
    {
        // création du conteneur de l'objet gérant (via doctrine) la classe Article
        $repository = $this->getDoctrine()
                ->getRepository('PersoArticleBundle:Article');
        
        // on récupère tous les articles (équivalent select * from article)
        $prend = $repository->findAll();
        
        // affichage de la vue twig avec la variable affiche (twig) et $prend (résultat de la requête)
        return $this->render('PersoArticleBundle:Default:index.html.twig',array("affiche"=>$prend));
        
    }
    
    // Page de détail d'un article
    public function afficheAction($id)
    {
        // création du conteneur de l'objet gérant (via doctrine) la classe Article
        $repository = $this->getDoctrine()
                ->getRepository('PersoArticleBundle:Article');
        
        // on récupère tous les articles (équivalent select * from article WHERE id = $id)
        $prend = $repository->find($id);
        
        // affichage de la vue twig avec la variable affiche (twig) et $prend (résultat de la requête)
        return $this->render('PersoArticleBundle:Default:affiche.html.twig',array("affiche"=>$prend));
        
    }
}
