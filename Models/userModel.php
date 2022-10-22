<?php
require_once("../do-an-web-php/Classes/user.php");
require_once("../do-an-web-php/Modules/db_module.php");
class Model
{
    public function getuserlist()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_user");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new User($rows['id'], $rows['username'], $rows['password'], $rows['email'], $rows['address']);
            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function checkUnique($username, $password, $email, $address)
    {
        $allusers = $this->getuserlist();
        foreach ($allusers as $user) {
            if (
                $user->getusername === $username || $user->getemail === $email ||
                $user->getpassword === $password || $user->getaddress === $address
            ) {
                return false;
            }
        }
        return true;
    }
    public function Register($username, $password, $email, $address)
    {
        $link = null;
        taoKetNoi($link);
        $query = "insert into tbl_user(username,password,email,address)
                        value($username,$password,$email,$address)";
        $result2 = mysqli_query($link, $query);
        if ($result2) {
            header("Location: signup.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: signup.php?error=unknown error occurred");
            exit();
        }
    }
    public function getuserid($id)
    {
        $allusers = $this->getuserlist();
        foreach ($allusers as $user) {
            if ($user->getid() === $id)
                return $user;
        }
        return null;
    }
    public function getUsername($username)
    {
        $allusers = $this->getuserlist();
        foreach ($allusers as $user) {
            if ($user->getusername() === $username) {
                return $user;
            }
        }
        return null;
    }
    public function updateUser($username)
    {
        $user = $this->getusername($username);
        $query = "update tbl_user set ";
    }
    public function deleteUser($username)
    {
    }
    public function searchUser($keyword)
    {
        $link = NULL;
        taoKetNoi($link);
        $result = NULL;
        $data = array();
        $result = chayTruyVanTraVeDL($link, "select * from tbl_user where username like '%" . $keyword . "%'");
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new User($rows['id'], $rows['username'], $rows['password'], $rows['email'], $rows['address']);
            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
}
