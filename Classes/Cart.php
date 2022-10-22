<?php
    class Cart{
        private $id;
        
        public function getId() 
        {
            return $this->id;
        }

        public function __construct($id)
        {
            $this->id = $id;
        }

        public function __toString()
        {
            return "Cart($this->id)";
        }
    }
?>