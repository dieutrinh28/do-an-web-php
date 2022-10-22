<?php
    function addToCart($hang) {
        if(isset($_SESSION['giohang'])) {
            $giohang = $_SESSION['giohang'];
            if(!array_key_exists($hang["id"], $giohang))
            {
                $giohang[$hang["id"]] = $hang;
            }
            $_SESSION['giohang'] = $giohang;
        }
        else
        {
            $giohang[$hang["id"]] = $hang;
            $_SESSION['giohang'] = $giohang;
        }
    }
    function deleteFromCart($key) {
        if(isset($_SESSION['giohang'])) {
            $giohang = $_SESSION['giohang'];
            unset($giohang[$key]);
            $_SESSION['giohang'] = $giohang;
        }
    }
    function updateCart($key, $soluong) {
        if(isset($_SESSION['giohang'])) {
            $giohang = $_SESSION['giohang'];
            $giohang[$key]['soluong'] = $soluong;
            $_SESSION['giohang'] = $giohang;
        }
    }
    function payment() {
        $sum = 0;
        $giohang = $_SESSION['giohang'];
        foreach($giohang as $v)
            $sum+=$v['soluong']*$v['gia'];
        return number_format($sum);
    }
?>