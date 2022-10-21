<?php
    require_once("./Classes/Product.php");
    require_once("./Modules/db_module.php");

    class ProductModel
    {
        public function getProductList()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id_sanpham"], $rows["ten_sanpham"], $rows["gia_sanpham"]);
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
