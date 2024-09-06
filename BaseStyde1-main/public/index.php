<?php

require '../vendor/autoload.php';

$element = new \App\HtmlElement('p',['id' => 'my_paragraph'],'HTML ELEMENT HERE');

echo $element->render();

$element = new \App\HtmlElement('p',[],'video 2');

echo $element->render();