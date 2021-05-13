<?php

class Circle {

    private $icon;
    private $alt;
    private $classNumber;

    public function __construct($icon, $alt, $classNumber){
        $this->icon = $icon;
        $this->alt = $alt;
        $this->classNumber = $classNumber;
    }
    
    public function createCircle() {
        $html = '<div class="circle'. $this->classNumber .'">';
        $html .= ('<svg>');
        $html .= ('<circle cx="50" cy="50" r="40"></circle>');
        $html .= ('</svg>');
        $html .= ('<div class="counter">');
        $html .= ('<span id="percent"></span>');
        $html .= ('</div>');
        $html .= ('<img class="skill" src="'. $this->icon .'" alt='.$this->alt.'>');
        $html .= '</div>';

        return $html;

    }
        
    
}