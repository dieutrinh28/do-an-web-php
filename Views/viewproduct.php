<!DOCTYPE html>
<html>
    <body>
        <h1>Product Info</h1>
        <?php
            echo "<b>ID: </b>".$product->getId()."<br/>";
            echo "<b>Price: </b>".$product->getPrice()."<br/>";
            echo "<b>Description: </b>".$product->getDescription()."<br/>";
        ?>
    </body>
</html>