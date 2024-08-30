<?php

namespace App\Domain\Element;

abstract class AbstractElement implements ElementInterface
{
    protected $parameters;
    protected $payload;
    protected $children;

    public function __construct(array $parameters, array $payload = [], array $children = [])
    {
        $this->parameters = $parameters;
        $this->payload = $payload;
        $this->children = $children;
    }

    abstract public function render(): string;
}
