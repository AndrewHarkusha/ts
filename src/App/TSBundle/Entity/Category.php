<?php

namespace App\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $news;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $editors;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
        $this->editors = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add news
     *
     * @param \App\TSBundle\Entity\News $news
     * @return Category
     */
    public function addNews(\App\TSBundle\Entity\News $news)
    {
        $this->news[] = $news;

        return $this;
    }

    /**
     * Remove news
     *
     * @param \App\TSBundle\Entity\News $news
     */
    public function removeNews(\App\TSBundle\Entity\News $news)
    {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Add editors
     *
     * @param \App\TSBundle\Entity\Editors $editors
     * @return Category
     */
    public function addEditor(\App\TSBundle\Entity\Editors $editors)
    {
        $this->editors[] = $editors;

        return $this;
    }

    /**
     * Remove editors
     *
     * @param \App\TSBundle\Entity\Editors $editors
     */
    public function removeEditor(\App\TSBundle\Entity\Editors $editors)
    {
        $this->editors->removeElement($editors);
    }

    /**
     * Get editors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEditors()
    {
        return $this->editors;
    }
}
