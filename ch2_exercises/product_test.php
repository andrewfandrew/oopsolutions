<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// include the class file
require_once '../Ch2/Product.php';

// create an instance of the Ch2_Product class
$product = new Ch2_Product();

// display the $_type property
//echo $product->_type;

// try this too
$product->_type = 'DVD';


