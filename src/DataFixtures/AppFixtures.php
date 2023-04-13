<?php

namespace App\DataFixtures;
use App\Entity\Category;
use App\Entity\Note;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i<50; $i++){
        $note = new Note();
        $note->setTitle('My first note')
        ->setContent('this is my first note')
        ->setCreatedAt(new \DateTimeImmutable('now')) 
        ->setUpdatedAt(new \DateTimeImmutable('now'))
        ->setAuthor('Jensone');
        $manager->persist($note);
    }

    $categories = ['PHP', 'Symfony', 'Doctrine', 'Twig', 'MySQL', 'JavaScript', 'React', 'Vue', 'Angular', 'NodeJS'];

    $colors = ['red', 'blue', 'green', 'yellow', 'orange', 'purple', 'pink', 'brown', 'black', 'white', 'grey', 'cyan', 'magenta', 'lime', 'olive', 'teal', 'navy', 'maroon', 'aqua', 'fuchsia'];
    

    // Boucle sur les categories 

    for($i=0;$i<count($categories);$i++){
        $category = new category();
        $category->setTitle($categories[$i])
        ->setColor($colors[array_rand($colors)]);
        $manager->persist($category);

    }

        $manager->flush();
    }
}
