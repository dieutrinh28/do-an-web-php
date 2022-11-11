<?php
session_start();
require_once "../do-an-web-php/Modules/cart_module.php";

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "Thêm vào giỏ":
            $hang = array("id" => $_POST['id'], "ten" => $_POST['ten'], "gia" => $_POST['gia'], "soluong" => 1);
            $this->model->themhangvaogio($hang);
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;
        case "Cập nhật":
            $this->model->capnhathangtronggio($_POST['id'], $_POST['soluong']);
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;
        case "Xóa hàng":
            $this->model->xoahangkhoigio($_POST['id']);
            header("Location: " . $_SERVER['HTTP_REFERER']);
            break;
        default:
            break;
    }
}
