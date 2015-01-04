<?php

namespace App\TSBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use App\TSBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $social = new Category();
        $social->setName('Социальные');
        $sport = new Category();
        $sport->setName('Спорт');
        $music = new Category();
        $music->setName('Музыка');
        $em->persist($social);
        $em->persist($sport);
        $em->persist($music);
        $em->flush();
        $this->addReference('category-social', $social);
        $this->addReference('category-sport', $sport);
        $this->addReference('category-music', $music);
    }

    public function getOrder()
    {
        return 1;
    }
}
