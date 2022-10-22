<!DOCTYPE html>
<html>
    <body>
        <h1>Product List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <?php
                foreach($products as $product)
                    echo "
                    <tr>
                        <td><a href = 'index.php?productid=".$product->getId()."'>".$product->getId()."</a></td>
                        <td>".$product->getName()."</td>
                        <td>".$product->getDescription()."</td>
                        <td><a href = ''>Thêm vào giỏ</a></td>
                    </tr>
                    ";
            ?>
        </table>
    </body>
</html>