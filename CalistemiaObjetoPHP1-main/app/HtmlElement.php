<?php  

namespace App;  

class HtmlElement {  
    private $name;  
    private $attributes;  
    private $content;  

    public function __construct(string $name, array $attributes = [], string $content = '') {  
        $this->name = $name;  
        $this->attributes = $attributes;  
        $this->content = $content;  
    }  

    public function render(): string {  
        $result = '<' . $this->name;  

        foreach ($this->attributes as $key => $value) {  
            $result .= ' ' . $key . '="' . $value . '"';  
        }  

        $result .= '>';  

        if (!$this->isVoid()) {  
            $result .= $this->content();  
            $result .= $this->close();  
        }  

        return $result;  
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