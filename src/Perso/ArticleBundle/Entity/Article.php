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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set letitre
     *
     * @param string $letitre
     *
     * @return Article
     */
    public function setLetitre($letitre)
    {
        $this->letitre = $letitre;

        return $this;
    }

    /**
     * Get letitre
     *
     * @return string
     */
    public function getLetitre()
    {
        return $this->letitre;
    }

    /**
     * Set letexte
     *
     * @param string $letexte
     *
     * @return Article
     */
    public function setLetexte($letexte)
    {
        $this->letexte = $letexte;

        return $this;
    }

    /**
     * Get letexte
     *
     * @return string
     */
    public function getLetexte()
    {
        return $this->letexte;
    }

    /**
     * Set ladate
     *
     * @param \DateTime $ladate
     *
     * @return Article
     */
    public function setLadate($ladate)
    {
        $this->ladate = $ladate;

        return $this;
    }

    /**
     * Get ladate
     *
     * @return \DateTime
     */
    public function getLadate()
    {
        return $this->ladate;
    }

    /**
     * Set lauteur
     *
     * @param string $lauteur
     *
     * @return Article
     */
    public function setLauteur($lauteur)
    {
        $this->lauteur = $lauteur;

        return $this;
    }

    /**
     * Get lauteur
     *
     * @return string
     */
    public function getLauteur()
    {
        return $this->lauteur;
    }
}
