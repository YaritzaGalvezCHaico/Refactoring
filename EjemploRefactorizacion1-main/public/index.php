<?php  
require '../vendor/autoload.php';  

use App\HtmlElement;  

$element = new HtmlElement('p', [], 'Este es el contenido');  
echo $element->render(); // Eliminar htmlspecialchars aquí  

$element = new HtmlElement('img', ['src' => 'img/styde.png']);  
echo $element->render(); // Eliminar htmlspecialchars aquí

// Crear otro párrafo con 'video 3'  
$element = new \App\HtmlElement('p', [], 'video 6');  
echo $element->render();  
