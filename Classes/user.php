<?php
class User
{

    private $id;
    private $username;
    private $password;
    private $email;
    private $address;

    public function getid()
    {
        return $this->id;
    }
    public function getusername()
    {
        return $this->username;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function getaddress()
    {
        return $this->address;
    }

    public function __construct($id, $username, $password, $email, $address)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->address = $address;
    }
}
