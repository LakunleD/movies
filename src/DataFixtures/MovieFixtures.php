<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle("The Dark Knight");
        $movie->setReleaseYear(2008);
        $movie->setDescription("This is the description of Dark Knight");
        $movie->setImagePath("https://cdn.pixabay.com/photo/2024/01/15/11/36/batman-8510022_1280.png");

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("Avenger: Endgame");
        $movie2->setReleaseYear(2019);
        $movie2->setDescription("This is the description of Avenger: Endgame");
        $movie2->setImagePath("https://cdn.pixabay.com/photo/2021/07/20/14/59/iron-man-6480952_1280.jpg");

        $manager->persist($movie2);

        $manager->flush();
    }
}
