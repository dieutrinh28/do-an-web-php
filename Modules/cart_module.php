<?php

function themhangvaogio($product)
{
    if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        if (!array_key_exists($product["id"], $giohang)) {
            $giohang[$product["id"]] = $product;
            $_SESSION['giohang'] = $giohang;
        } else {
            $giohang[$product["id"]] = $product;
            $_SESSION["giohang"] = $giohang;
        }

        // $i = 0;
        // foreach ($_SESSION['giohang'] as $key => $value) {
        //     if ($_SESSION['giohang'][$key]['id'] == $_POST['id']) {
        //         $i++;
        //         $_SESSION['giohang'][$key]['soluong'] = $_POST['soluong'] + $_SESSION['giohang'][$key]['soluong'];
        //     }
        // }

        // if ($i == 0) {
        //     $item = array(
        //         "id" => $_POST['id'], "ten" => $_POST['ten'], "gia" => $_POST['gia'], "soluong" => 1
        //     );
        //     $_SESSION['giohang'][] = $item;
        // }
    }
}
function xoahangkhoigio($key)
{
    if (isset($_SESSION["giohang"])) {
        $giohang = $_SESSION['giohang'];
    };
    unset($giohang[$key]);
    $_SESSION['giohang'] = $giohang;
}

function capnhathangtronggio($key, $soluong)
{
    if (isset($_SESSION['giohang'])) {
        $cart = $_SESSION['giohang'];
        $cart[$key]['soluong'] = $soluong;
        $_SESSION['giohang'] = $cart;
    }
}
function tinhtien()
{
    $sum = 0;
    $cart = $_SESSION['giohang'];
    foreach ($cart as $v)
        $sum += $v['soluong'] * $v['gia'];
    return number_format($sum);
}
