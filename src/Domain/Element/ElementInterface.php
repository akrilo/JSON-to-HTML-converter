<?php

namespace App\Domain\Element;

interface ElementInterface
{
    public function render(): string;
}