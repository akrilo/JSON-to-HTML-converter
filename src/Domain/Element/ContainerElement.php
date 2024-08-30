<?php

namespace App\Domain\Element;

class ContainerElement extends AbstractElement
{
    public function render(): string
    {
        $html = '<div>';
        foreach ($this->children as $child) {
            $html .= $child->render();
        }
        $html .= '</div>';
        return $html;
    }
}
