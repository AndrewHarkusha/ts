<?php

namespace App\TSBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use App\TSBundle\Entity\News;

class LoadNewsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $newsMusic = new News();
        $newsMusic->setCategory($em->merge($this->getReference('category-music')));
        $newsMusic->setUrl('http://music.com.ua/');
        $newsMusic->setData('02.01.2015');
        $newsMusic->setPosition('Новый альбом Мадонны убежал в интернет');
        $newsMusic->setDescription('В Сети обнаружились черновые версии сразу 14 новых треков Мадонны.');
        $newsMusic->setIsPublic(true);
        $newsMusic->setIsActivated(true);
        $newsMusic->setToken('news_music_com_ua');

        $newsSport = new News();
        $newsSport->setCategory($em->merge($this->getReference('category-sport')));
        $newsSport->setUrl('http://www.biathlon.com.ua/');
        $newsSport->setData('31.12.2014');
        $newsSport->setPosition('Валя Семеренко - лучшая спортсменка декабря в Украине');
        $newsSport->setDescription('Экспертная комиссия НОК Украины выбрала биатлонистку лучшей спортсменкой декабря, кроме того она занимаем второе место в мировом рейтинге');
        $newsSport->setIsPublic(true);
        $newsSport->setIsActivated(true);
        $newsSport->setToken('news_biathlon_com_ua');


        $em->persist($newsMusic);
        $em->persist($newsSport);
        $em->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
