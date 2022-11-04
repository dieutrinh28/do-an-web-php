<?php
require_once("./Classes/Product.php");
require_once("./Modules/db_module.php");
session_start();

class ProductModel
{
    public function getProductList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_products");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product($rows["pro_id"], $rows["pro_name"], $rows["pro_des"], $rows["price"], $rows["pic"], $rows["cat_id"]);
            array_push($data, $product);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function getProduct($id)
    {
        $allproducts = $this->getProductList();
        foreach ($allproducts as $product)
            if ($product->getId() === $id)
                return $product;
        return null;
    }
    public function searchProduct($keyword)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_products where pro_name like '%" . $keyword . "%'");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new Product($rows["pro_id"], $rows["pro_name"], $rows["pro_des"], $rows["price"], $rows["pic"], $rows["cat_id"]);
            array_push($data, $product);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
  
    

}
