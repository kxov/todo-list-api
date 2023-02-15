<?php

declare(strict_types=1);

namespace App\Band\Application\Command\Band;

use App\Shared\Application\Command\CommandInterface;
use DateTimeImmutable;
use Symfony\Component\Validator\Constraints as Assert;

class CreateBandCommand implements CommandInterface
{
    /**
     * @Assert\Type("string")
     * @Assert\NotBlank()
     */
    public string $name;

    public DateTimeImmutable $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }
}