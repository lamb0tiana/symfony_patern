<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class LiveDemo
{
    use DefaultActionTrait;
    #[LiveProp]
    public int $number=5;

    #[LiveAction]
    public function getData(): int
    {
        $this->number = rand(0, 100  );

        return $this->number;
    }
}
