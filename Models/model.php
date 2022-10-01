<?php
    require_once("Models/product.php");
    require_once("Modules/db_module.php");

    class Model
    {
        public function getProductList()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select * from db_");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id"], $rows["price"], $rows["description"]);
                array_push($data, $product);
            }
            giaiPhongBoNho($link, $result);
            return $data;

        }
        public function getProduct($id)
        {
            $allproducts = $this->getProductList();
            foreach($allproducts as $product)
                if($product->getId()===$id)
                    return $product;
                return null;
        }
    }
?>