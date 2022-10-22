<?php
    class Inventory{
        private $id;
        private $price;
        private $amount;
        
        public function getId() 
        {
            return $this->id;
        }
        public function getPrice() 
        {
            return $this->price;
        }
        public function getAmount()
        {
            return $this->amount;
        }

        public function __construct($id, $price, $amount)
        {
            $this->id = $id;
            $this->price = $price;
            $this->amount = $amount;
        }

        public function __toString()
        {
            return "Inventory($this->id, $this->price, $this->amount)";
        }
    }
