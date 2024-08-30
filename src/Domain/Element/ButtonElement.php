<?php

namespace App\Domain\Element;

class ButtonElement extends AbstractElement
{
    public function render(): string
    {
        $style = $this->getStyle();
        $text = $this->payload['text'] ?? '';
        $link = $this->payload['link']['payload'] ?? '#';
        return "<a href='{$link}' style='{$style}'>{$text}</a>";
    }

    private function getStyle(): string
    {
        $styles = [];
        if (isset($this->parameters['textColor'])) {
            $styles[] = "color: {$this->parameters['textColor']};";
        }
        if (isset($this->parameters['backgroundColor'])) {
            $styles[] = "background-color: {$this->parameters['backgroundColor']};";
        }
        return implode(' ', $styles);
    }
}
