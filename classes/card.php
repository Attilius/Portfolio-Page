<?php

class Card {

    private $image;
    private $title;
    private $url;

    public function __construct($image, $title, $url) {
        $this->image = $image;
        $this->title = $title;
        $this->url = $url;
    }

    public function createCard() {

        $btnText = "Let's see";

        $html = '<div class="works">';
        $html .= ('<img src="'. $this->image .'" alt="Picture">');
        $html .= ('<h2 id="work-title">' . $this->title . '</h2>');
        $html .= ('<a href="' . $this->url . '" target="_blank" rel="noopener noreferrer" id="work-btn">' . $btnText . '</a>');
        $html .= '</div>';

        return $html;
    }
}
