<?php

declare(strict_types=1);

namespace App\Tests\Resource\Fixture;

use App\Domain\User\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Tests\Tools\FakerTools;

class UserFixture extends Fixture
{
    use FakerTools;

    const REFERENCE = 'user';

    public function load(ObjectManager $manager)
    {
        $email = $this->getFaker()->email();
        $password = $this->getFaker()->password();
        $user = new User($email, $password);

        $manager->persist($user);
        $manager->flush();

        $this->addReference(self::REFERENCE, $user);
    }
}