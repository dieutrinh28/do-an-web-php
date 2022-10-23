<?php
class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;
    private $idloaisp;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getIdLoaiSP()
    {
        return $this->idloaisp;
    }

    public function __construct($id, $name, $description, $price, $image, $idloaisp)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->idloaisp = $idloaisp;
    }

    public function __toString()
    {
        return "Product($this->id, $this->name, $this->description, $this->price, $this->image, $this->idloaisp)";
    }
}
