<?php
require_once __DIR__ . '/../../Model/productModel.php';


class ordercontroler
{
    // public function checkout()
    // {
    //     //-1 kiem tra login chưa 
        
    //     if (session_status() === PHP_SESSION_NONE) session_start();
    //     $config = require("config.php");
    //     $baseURl = $config["baseURL"];
    //     //-2 nếu chưa thì login
    //     if (isset($_SESSION['user_id']))
    //     {   
    //         header('Location:'. $baseURL . 'user/login');
    //         exit();
    //     }
    //     //-3 rồi thì tạo oderdetail

    //     //-4 xóa võ hàng
 
    //     include __DIR__ ."/../view/checkout/index.php";
    // }
    public function checkout()
    {
        if (session_status()===PHP_SESSION_NONE)
        {
            session_start();
        }
        $config = require 'config.php';            
        $baseURL = $config['baseURL'];           

        // 1. Neu nguoi dung chua login ==>yeu cau login 
        if (!isset($_SESSION['user_id']))
        {   
            header('Location:'. $baseURL . 'user/login');
            exit();
        }
        // 2. Tạo Order
        // 3. Tạo Order Detail 
        // 4. Xoa gio hang
        include __DIR__ . '/../view/checkout/checkout.php';
    }
}
