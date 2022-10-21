<?php
    class Product{
        private $id;
        private $name;
        private $price;

        public function getId() 
        {
            return $this->id;
        }
        public function getName() 
        {
            return $this->name;
        }
        public function getPrice() 
        {
            return $this->price;
        }

        public function __construct($id, $name, $price)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
        }

        public function __toString()
        {
            return "Product($this->id, $this->name, $this->price)";
        }
    }
?>