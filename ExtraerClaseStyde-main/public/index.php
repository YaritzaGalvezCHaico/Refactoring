<?php  
require '../vendor/autoload.php'; // Asegúrate de que la ruta sea correcta  

use App\HtmlElement;  

// Renderiza los elementos HTML  
echo (new HtmlElement('p', [], 'Este es el contenido'))->render();  
echo (new HtmlElement('p', ['id' => 'my_paragraph'], 'Este es el contenido'))->render();  
echo (new HtmlElement('p', ['id' => 'my_paragraph', 'class' => 'paragraph'], 'Este es el contenido'))->render();  
echo (new HtmlElement('img', ['src' => 'img/styde.png']))->render();
echo (new HtmlElement('p', [], 'Video 10'))->render();  
