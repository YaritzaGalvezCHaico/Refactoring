<?php  

require '../vendor/autoload.php';  

// Crear un párrafo con contenido  
$element = new \App\HtmlElement('p', ['id' => 'my_paragraph'], 'Este es el contenido');  
echo $element->render();  

// Crear otro párrafo con contenido  
$element = new \App\HtmlElement('p', ['id' => 'my_paragraph'], 'Este es el contenido');  
echo $element->render();  

// Crear un elemento de imagen para mostrar 'styde.png'  
$imageElement = new \App\HtmlElement('img', [  
    'src' => 'styde.png',  // Ajusta la ruta según sea necesario  
    'alt' => 'Descripción de la imagen'  
]);  
echo $imageElement->render();  // Se debe mostrar la imagen   

// Título para la imagen  
$titleElement = new \App\HtmlElement('h2', [], 'Curso de "Refactorización" en Styde');  
echo $titleElement->render();  

// Crear un campo de entrada requerido  
$inputElement = new \App\HtmlElement('input', [  
    'type' => 'text',  
    'required' => 'required',  
    'placeholder' => 'Ingresa tu texto aquí'  
]);  
echo $inputElement->render();  // Se debe mostrar el campo de entrada  

// Agregar el nuevo párrafo con el texto "Este es el contenido"  
$newParagraph = new \App\HtmlElement('p', [], 'Este es el contenido');  
echo $newParagraph->render();

// Crear otro párrafo con 'video 3'  
$element = new \App\HtmlElement('p', [], 'video 5');  
echo $element->render();  
