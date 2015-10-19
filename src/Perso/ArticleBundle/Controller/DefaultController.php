<?php

namespace Perso\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    // pas de variables get pour l'accueil
    public function indexAction()
    {
        // affichage de la vue twig sans variables
        return $this->render('PersoArticleBundle:Default:index.html.twig');
    }
}
