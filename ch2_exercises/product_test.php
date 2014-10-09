<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>This is Product Class Test page</h1>

        <?php
// include the class file
        require_once '../Ch2/Product.php';

// create an instance of the Ch2_Product class
        $product = new Ch2_Product();

// display the $_type property
//        echo $product->_type;

// try this too
        $product->_type = 'DVD';
        
        echo "Test page: AF";
        ?>
    </body>
</html>



