<?php
session_start();
include "./model/pdo.php";
include "./global.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/taikhoan.php";
include "./model/size.php";
include "view/client/header.php";

$spnew =  loadall_sanpham_home();
$sp =  loadall_sanpham_sanpham();
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
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $product_id = $_GET['idsp'];
                $onesp = load_sanpham_by_id($product_id);
                $sp_cung_loai = load_sanpham_cungloai($product_id);
                include "view/client/product-detail.php";
            } else {
                include "view/client/home.php";
            }
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
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $product_id = $_GET['idsp'];
                
                $dssp = loadall_sanpham("", $iddm);
                // $tendm = load_danhmuc_by_id($category_id) ;
                include "view/client/product-detail.php";
            } else {
                include "view/client/shop-grid.php";
            }
            
            break;
            
        case 'hoadon':
            include "view/client/check-out.php";
            break;

        case 'dangnhap':
            
            include "view/client/login.php";
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                
                add_taikhoan($name, $email, $pass);
                $dktkthanhcong = "Đăng ký tài khoản mới thành công";
            }
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