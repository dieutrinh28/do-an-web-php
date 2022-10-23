<?php
require_once("../do-an-web-php/Classes/User.php");
require_once("../do-an-web-php/Modules/db_module.php");
class UserModel
{
    public function getUserList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_users");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new User($rows['user_id'], $rows['user_fullname'], $rows['user_sdt'], $rows['user_pass'], $rows['user_address'], $rows['user_username'], $rows['decen_id']);
            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function checkUnique($fullname, $password, $email, $address)
    {
        $allusers = $this->getUserList();
        foreach ($allusers as $user) {
            if (
                $user->getusername === $fullname || $user->getemail === $email ||
                $user->getpassword === $password || $user->getaddress === $address
            ) {
                return false;
            }
        }
        return true;
    }
    public function register($fullname, $sdt, $password, $address, $username)
    {
        $link = null;
        taoKetNoi($link);
        $query = "INSERT INTO `tbl_users` (`user_fullname`, `user_sdt`, `user_pass`, `user_address`, `user_username`, `decen_id`) VALUES
                        ($fullname, $sdt, $password, $address, $username, 2)";
        $result2 = mysqli_query($link, $query);
        if ($result2) {
            header("Location: signup.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: signup.php?error=unknown error occurred");
            exit();
        }
    }
    public function getUserId($id)
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
    public function getFullname($fullname)
    {
        $allusers = $this->getUserList();
        foreach ($allusers as $user) {
            if ($user->getusername() === $fullname) {
                return $user;
            }
        }
        return null;
    }
    public function updateUser($username)
    {
        $user = $this->getusername($username);
        $query = "update tbl_users set ";
    }
    public function deleteUser($username)
    {
    }
    public function searchUser($keyword)
    {
        $link = NULL;
        taoKetNoi($link);
        $data = array();
        $result = chayTruyVanTraVeDL($link, "select * from tbl_users where user_fullname like '%" . $keyword . "%'");
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new User($rows['user_id'], $rows['user_fullname'], $rows['user_sdt'], $rows['user_pass'], $rows['user_address'], $rows['user_username'], $rows['decen_id']);
            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
}
