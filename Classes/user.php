<?php
class User
{
    private $id;
    private $fullname;
    private $password;
    private $sdt;
    private $address;
    private $username;
    private $decentralization;

    public function getId()
    {
        return $this->id;
    }
    public function getFullname()
    {
        return $this->fullname;
    }
    public function getSdt()
    {
        return $this->sdt;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getDecentralization()
    {
        return $this->decentralization;
    }

    public function __construct($id, $fullname, $sdt, $password, $address, $username, $decentralization)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->sdt = $sdt;
        $this->password = $password;
        $this->address = $address;
        $this->username = $username;
        $this->decentralization = $decentralization;
    }
}
