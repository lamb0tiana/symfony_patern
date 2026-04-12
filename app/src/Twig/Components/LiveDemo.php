<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class LiveDemo
{
    use DefaultActionTrait;
    public int $number=5;

    #[LiveAction]
    public function getData(): int
    {
        return rand(0, 100  );
    }
}
