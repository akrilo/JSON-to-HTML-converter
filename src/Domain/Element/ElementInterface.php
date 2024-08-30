<?php

declare(strict_types=1);

namespace App\Domain\Element;

interface ElementInterface
{
    public function render(): string;
}