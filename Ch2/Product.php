<?php


class Ch2_Product {
// properties go here
protected $_type;
protected $_title;

// constructor
public function __construct($type, $title) {
    // The value of $_type is now being set by the constructor 
    // which replaces the setter method 
    // Use a getter method to fetch teh value of teh $_title property
    $this->_type = $type;
    $this->_title = $title;
}
    
    // methods defined here
    public function getProductType()
    {
        return $this->_type;
    }
    public function getTitle()
    {
        return $this->_title;
    }
}



