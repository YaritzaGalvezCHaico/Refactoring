<?php  

require '../vendor/autoload.php';  

// Crear un párrafo con contenido  
$element = new \App\HtmlElement('p', ['id' => 'my_paragraph'], 'Este es el contenido');  
echo $element->render();  

// Crear otro párrafo  
$element = new \App\HtmlElement('p', [], 'Este es el contenido');  
echo $element->render();  

// Título para la imagen  
$titleElement = new \App\HtmlElement('h2', [], 'Curso de "Refactorización" en Styde');  
echo $titleElement->render();  

// Crear un elemento de imagen para mostrar 'styde.png'  
$imageElement = new \App\HtmlElement('img', [  
    'src' => 'styde.png',  // Ajusta la ruta según sea necesario  
    'alt' => 'Descripción de la imagen'  
]);  
echo $imageElement->render();  // Se debe mostrar la imagen  

// Crear otro párrafo con 'video 3'  
$element = new \App\HtmlElement('p', [], 'video 3');  
echo $element->render();