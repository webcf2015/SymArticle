<?php

namespace Perso\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="letitre", type="string", length=120, nullable=true)
     */
    private $letitre;

    /**
     * @var string
     *
     * @ORM\Column(name="letexte", type="text", length=65535, nullable=true)
     */
    private $letexte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ladate", type="datetime", nullable=true)
     */
    private $ladate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="lauteur", type="string", length=80, nullable=true)
     */
    private $lauteur;


}

