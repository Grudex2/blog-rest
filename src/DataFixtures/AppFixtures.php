<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $manager->persist($product);
        $blogPost = new BlogPost();
        $blogPost->setTitle('A first post!');
        $blogPost->setPublished(new \DateTime('2021-02-10 15:00:00'));
        $blogPost->setContent('text');
        $blogPost->setAuthor('Paweł Grudniewski');
        $blogPost->setSlug('first');
        $manager->persist($blogPost);

        $blogPost = new BlogPost();
        $blogPost->setTitle('A second post!');
        $blogPost->setPublished(new \DateTime('2021-02-10 16:00:00'));
        $blogPost->setContent('text 2');
        $blogPost->setAuthor('Paweł Grudniewski');
        $blogPost->setSlug('second');
        $manager->persist($blogPost);

        $manager->flush();
    }
}
