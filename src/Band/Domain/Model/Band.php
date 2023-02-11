<?php

declare(strict_types=1);

namespace App\Band\Domain\Model;
class Band
{
    private int $id;
    private string $name;
    private \DateTimeImmutable $dateCreate;
}