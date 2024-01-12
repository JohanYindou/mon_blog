<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $post = new Post();
        $post->setTitle('Mon premier article')
            ->setSlug('mon-premier-article')
            ->setContent('Ceci est le contenu de mon premier article')
            ->setImage('https://via.placeholder.com/350x150')
            ->setCreatedAt(new DateTimeImmutable('now'))
            ->setUpdatedAt(new DateTimeImmutable('now'))
            ;
        $manager->persist($post);
        $manager->flush();
    }
}
