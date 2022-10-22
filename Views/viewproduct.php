<!DOCTYPE html>
<html>

<body>
    <h1>Product Info</h1>
    <?php
    echo "<b>ID: </b>" . $product->getId() . "<br/>";
    echo "<b>Name: </b>" . $product->getName() . "<br/>";
    echo "<b>Description: </b>" . $product->getDescription() . "<br/>";
    echo "Thêm vào giỏ hàng";
    ?>
</body>

</html>