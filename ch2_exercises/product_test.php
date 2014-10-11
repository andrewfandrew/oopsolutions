<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>AF: Safari books, 'PHP Object Oriented Solutions'    </title>
    </head>
    <body>
        <h1>This is Product Class Test page</h1>

        <?php
// include the class file
        require_once '../Ch2/Product.php';

// create an instance of the Ch2_Product class
//       $product = new Ch2_Product();

// display the $_type property
//        echo $product->_type;

// try this too
//        $product->_type = 'DVD';
        
        $product1 = new Ch2_Product('Book', 'PHP Object Oriented PHP Solutions');
        $product2 = new Ch2_Product('DVD', 'The Guns of Navaronne');
        
        echo '<p>$product1 is a ' . $product1->getProductType();
        echo ' called "' . $product1->getTitle(). '"</p>';
        echo '<p>$product2 is a ' . $product2->getProductType();
        echo ' called "' . $product2->getTitle() .  '"</p>';
       
        ?>
    </body>
</html>



