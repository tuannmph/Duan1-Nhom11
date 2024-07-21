<?php
session_start();
include "./model/pdo.php";
include "./global.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "view/client/header.php";

$spnew =  loadall_sanpham_home();
$dsdm = load_all_categories();

if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {  
        case 'trangchu':
            include "view/client/home.php";
            break;

        case 'sale':
            include "view/client/sale.php";
            break;

        case 'giohang':
            include "view/client/cart.php";
            break;

        case 'yeuthich':
            include "view/client/user-heart.php";
            break;

        case 'lichsu':
            include "view/client/user-account.php";
        break;
        
        case 'ttkhachhang':
            include "view/client/user-billing.php";
        break;

        case 'ctsanpham':
            include "view/client/product-detail.php";
        break;
        
        case 'gioithieu':
            include "view/client/about.php";
            break;

        case 'ptthanhtoan':
            include "view/client/user-payment.php";
            break;

        case 'thongbao':
            include "view/client/user-notification.php";
            break;
            
        case 'sanpham':
            include "view/client/shop-grid.php";
            break;
            
        case 'hoadon':
            include "view/client/check-out.php";
            break;

        case 'dangnhap':
            include "view/client/login.php";
            break;

        case 'dangky':
            include "view/client//register.php";
            break;
            
        default:
            include "view/client/home.php";
            break;
    }
}else{
    include "view/client/home.php";
}

include "view/client/footer.php";


?>