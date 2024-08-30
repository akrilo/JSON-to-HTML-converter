<?php

namespace App\Domain\Element;

class TextElement extends AbstractElement
{
    public function render(): string
    {
        $style = $this->getStyle();
        return "<p style='{$style}'>{$this->payload['text']}</p>";
    }

    private function getStyle(): string
    {
        $styles = [];
        if (isset($this->parameters['fontSize'])) {
            $styles[] = "font-size: {$this->parameters['fontSize']};";
        }
        if (isset($this->parameters['textAlign'])) {
            $styles[] = "text-align: {$this->parameters['textAlign']};";
        }
        return implode(' ', $styles);
    }
}
