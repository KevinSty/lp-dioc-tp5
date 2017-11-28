<?php

namespace App\DataFixtures\ORM;

use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPotion extends Fixture {
    public function load(ObjectManager $manager)
    {
        $potions = [
            new Potion('eau', 5, 15),
            new Potion('calmant', 3, 30),
            new Potion('medicaments', 5, 35),
            new Potion('cola', 2, 20)
        ];

        foreach ($potions as $potion) {
            $this->addReference($potion->getName(), $potion);
            $manager->persist($potion);
        }

        $manager->flush();
    }
}
