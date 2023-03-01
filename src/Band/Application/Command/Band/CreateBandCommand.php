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

    /**
     * @Assert\Type("\DateTimeInterface")
     */
    public DateTimeImmutable $createdAt;

    public function __construct()
    {
        $this->createdAt = $this->createdAt ?? new DateTimeImmutable();
    }
}
