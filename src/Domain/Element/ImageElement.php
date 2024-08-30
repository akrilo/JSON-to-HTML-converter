<?php

declare(strict_types=1);

namespace App\Domain\Element;

class ImageElement extends AbstractElement
{
    public function render(): string
    {
        $url = $this->payload['image']['url'] ?? '';
        return "<img src='{$url}' alt='image' />";
    }
}
