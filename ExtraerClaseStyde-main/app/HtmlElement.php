<?php  

namespace App;  

class HtmlElement {  
    private $name;  
    private $attributes;  
    private $content;  

    public function __construct(string $name, array $attributes = [], string $content = '') {  
        $this->name = $name;  
        $this->attributes = new HtmlAttribute($attributes); // Usar la nueva clase  
        $this->content = $content;  
    }  

    public function render(): string {  
        return '<' . $this->name .   
               $this->attributes->toString() .   
               ($this->isVoid() ? '>' : '>' . $this->content() . $this->close());  
    }  

    public function isVoid(): bool {  
        return in_array($this->name, ['br', 'hr', 'img', 'input', 'meta']);  
    }  

    public function content(): string {  
        return htmlspecialchars($this->content, ENT_QUOTES, 'UTF-8');  
    }  

    public function close(): string {  
        return '</' . $this->name . '>';  
    }  
}