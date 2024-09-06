<?php  

use App\HtmlElement;  

class ElementTest extends PHPUnit\Framework\TestCase {  
    /** @test */  
    public function it_generates_a_paragraph_with_content() {  
        $element = new HtmlElement('p', [], 'Este es el contenido');  
        $this->assertSame('<p>Este es el contenido</p>', $element->render());  
    }  

    /** @test */  
    public function it_generates_a_paragraph_with_multiple_attributes() {  
        $element = new HtmlElement('p', ['id' => 'my_paragraph', 'class' => 'paragraph'], 'Este es el contenido');  
        $this->assertSame('<p id="my_paragraph" class="paragraph">Este es el contenido</p>', $element->render());  
    }  

    /** @test */  
    public function it_generates_an_img_tag() {  
        $element = new HtmlElement('img', ['src' => 'img/styde.png']);  
        $this->assertSame('<img src="img/styde.png">', $element->render());  
    }  

    /** @test */  
    public function it_checks_if_a_element_is_void_or_not() {  
        $this->assertFalse((new HtmlElement('p'))->isVoid());  
        $this->assertTrue((new HtmlElement('img'))->isVoid());  
    }  
}