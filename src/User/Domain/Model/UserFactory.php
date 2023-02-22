<?php

declare(strict_types=1);

namespace App\User\Domain\Model;

use App\User\Domain\Service\UserPasswordHasherInterface;

class UserFactory
{
    public function __construct(private readonly UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function create(string $email, string $password): User
    {
        $user = new User($email);
        $password = $this->passwordHasher->hash($user, $password);

        $user->setPassword($password);

        return $user;
    }
}