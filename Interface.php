<?php
require_once("TransportationMethod");

class userInterface{
    private $map;
    private $transportMethod;
    private $feedbacks; 

    public function __construct(string $map, TransportMethod $transportMethod) {
        $this->map = $map;
        $this->transportMethod = $transportMethod; // Composition
    }

    public function getmap(){

    }

    public function viewDiscounts(){
        
    }

    public function displayTheme(){
        
    }
    
    public function changeLanguage(){
        
    }
}