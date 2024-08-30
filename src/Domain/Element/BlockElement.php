<?php

namespace App\Domain\Element;

class BlockElement extends AbstractElement
{
    public function render(): string
    {
        $style = $this->getStyle();
        $html = "<div style='{$style}'>";
        foreach ($this->children as $child) {
            $html .= $child->render();
        }
        $html .= '</div>';
        return $html;
    }

    private function getStyle(): string
    {
        return isset($this->parameters['textAlign']) ? "text-align: {$this->parameters['textAlign']};" : '';
    }
}
