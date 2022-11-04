<?php 
    class Cart 
    {
        private $id;
        private $productId;
        private $name;
        private $img;
        private $quantity;
        public function getId()
        {
            return $this->id;
        }
        public function getProductId()
        {
            return $this->productId;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getImg()
        {
            return $this->img;
        }
        public function getQuantity()
        {
            return $this->quantity;
        }
        public function __construct($id,$productId,$name,$img,$quantity)
        {
            $this->id = $id;
            $this->productId=$productId;
            $this->name=$name;
            $this->img=$img;
            $this->quantity=$quantity;

        }
    }
?>