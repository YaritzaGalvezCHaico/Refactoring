<?php  

namespace App;  

class HtmlAttribute {  
    private $attributes;  

    public function __construct(array $attributes = []) {  
        $this->attributes = $attributes;  
    }  

    public function toString(): string {  
        $attributesString = '';  
        foreach ($this->attributes as $key => $value) {  
            $attributesString .= ' ' . $key . '="' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '"';  
        }  
        return $attributesString;  
    }  
}