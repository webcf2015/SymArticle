<?php

namespace Perso\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PersoArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
