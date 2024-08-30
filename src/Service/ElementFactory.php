<?php

namespace App\Service;

use App\Domain\Element\{BlockElement, ButtonElement, ContainerElement, ImageElement, TextElement};

class ElementFactory
{
    public static function createElement(string $type, array $payload, array $parameters, array $children = [])
    {
        switch ($type) {
            case 'container':
                return new ContainerElement($parameters, $payload, $children);
            case 'block':
                return new BlockElement($parameters, $payload, $children);
            case 'text':
                return new TextElement($parameters, $payload);
            case 'image':
                return new ImageElement($parameters, $payload);
            case 'button':
                return new ButtonElement($parameters, $payload);
            default:
                throw new \Exception("Unknown element type: {$type}");
        }
    }
}
