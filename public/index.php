<?php

require_once '../vendor/autoload.php';

use App\Service\HtmlRenderer;

$json = file_get_contents('../data/data.json');
$renderer = new HtmlRenderer();
$html = $renderer->render($json);

echo $html;
