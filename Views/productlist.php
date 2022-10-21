<!DOCTYPE html>
<html>
    <body>
        <h1>Product List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            <?php
                foreach($products as $product)
                    echo "
                    <tr>
                        <td><a href = 'index.php?productid=".$product->getId()."'>".$product->getId()."</a></td>
                        <td>".$product->getName()."</td>
                        <td>".$product->getPrice()."</td>
                    </tr>
                    ";
            ?>
        </table>
    </body>
</html>