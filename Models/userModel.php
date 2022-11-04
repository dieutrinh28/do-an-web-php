<?php
require_once("../do-an-web-php/Classes/User.php");
require_once("../do-an-web-php/Modules/db_module.php");
require_once("../do-an-web-php/Models/validate.php");
class UserModel
{
    public function getUserList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_user");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new User($rows['id'], $rows['name'], $rows['phonenum'], $rows['password'], $rows['email'], $rows['username'], $rows['address']);
            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function exitUserName($username)
    {
        $allUser = $this->getUserList();
        $count = 0;
        for($i=0;$i<count($allUser);$i++)
        {
            if($allUser[$i]->getUsername() == $username)
            {
                $count ++;
            }
        }
        if($count == 0)
            return true;
        else    
            return false;
    }
    public function register($username, $password, $email, $phoneNum, $address, $name,$confirmPass)
    {
        $link = null;
        taoKetNoi($link);
        $valid = $password == $confirmPass;
        $valid =  validateEmail($email);
        $valid =  validateLenUp($username);
        $valid =  validateLenUp($password);
        if ($valid) {
            if(existUsername($link,$username)>0)
            {
                echo "this account has been exist".existUsername($link,$username);
                echo "name: ".$username;
                return false;
            }
            else
            {
                $query = "INSERT INTO tbl_user (username,password,email,name,phonenum,address) VALUES
                        ('$username','$password','$email','$name','$phoneNum','$address' )";
                if (mysqli_query($link, $query))
                {
                    return true;
                } 
                else 
                {
                    return false;
                }
                    
            }
        }
        else
        {
            return false;
        }
    }

    public function Login($username, $password)
    {
        $allusers = $this->getUserList();
        $count = 0;
        foreach ($allusers as $user) {
            if ($username == $user->getUsername() && $password == $user->getPassword())
                $count++;
        }
        if ($count != 0)
            return true;
        else
            return false;
    }
    public function getName($fullname)
    {
        $allusers = $this->getUserList();
        foreach ($allusers as $user) {
            if ($user->getName() === $fullname) {
                return $user;
            }
        }
        return null;
    }

    public function searchUser($keyword)
    {
        $link = NULL;
        taoKetNoi($link);
        $data = array();
        $result = chayTruyVanTraVeDL($link, "select * from tbl_user where username like '%" . $keyword . "%'");
        while ($rows = mysqli_fetch_assoc($result)) {
            $user = new User($rows['id'], $rows['name'], $rows['phonenum'], $rows['password'], $rows['address'], $rows['username'], $rows['email']);
            array_push($data, $user);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
}
