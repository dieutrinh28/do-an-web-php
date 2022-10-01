<?php
    class Product{
        private $id;
        private $price;
        private $description;

        public function getId() 
        {
            return $this->id;
        }
        public function getPrice() 
        {
            return $this->price;
        }
        public function getDescription() 
        {
            return $this->description;
        }

        public function __construct($id, $price, $description)
        {
            $this->id = $id;
            $this->price = $price;
            $this->description = $description;
        }

        public function __toString()
        {
            return "Product($this->id, $this->price, $this->description)";
        }
    }
?>