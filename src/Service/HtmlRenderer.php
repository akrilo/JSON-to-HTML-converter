<?php

namespace App\Service;

use App\Infrastructure\JsonParser;

class HtmlRenderer
{
    private $elementFactory;

    public function __construct()
    {
        $this->elementFactory = new ElementFactory();
    }

    public function render(string $json): string
    {
        $data = JsonParser::parse($json);
        $element = $this->createElementFromArray($data);
        return $element->render();
    }

    private function createElementFromArray(array $data)
    {
        $children = [];
        if (!empty($data['children'])) {
            foreach ($data['children'] as $childData) {
                $children[] = $this->createElementFromArray($childData);
            }
        }
        return $this->elementFactory::createElement(
            $data['type'],
            $data['payload'] ?? [],
            $data['parameters'] ?? [],
            $children
        );
    }
}
