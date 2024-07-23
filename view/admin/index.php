<?php
session_start();
ob_start();
include "./header.php";
include "../../model/pdo.php";
include "../../model/sanpham.php";
include "../../model/danhmuc.php";
include "../../model/size.php";
include "../../model/taikhoan.php";
include "../../model/binhluan.php";
include "../../model/thongke.php";
<<<<<<< HEAD
include "../../global.php";
=======
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9


if (!isset($_SESSION['s_user']) || !is_array($_SESSION['s_user']) || $_SESSION['s_user']['role'] != 1) {
    header("Location: login.php");
    exit; 
}
$admin = $_SESSION['s_user'];

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        //thống kê
        case 'thongke':
<<<<<<< HEAD
            // require_once 'thongke.php';
=======
            require_once 'thongke.php';
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
            $data = get_product_count_by_category();
            include "thongke.php";
            break;

        //Sản phẩm
        case 'themsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['tensp'];
                $price = $_POST['giasp'];
                $des = $_POST['mota'];
                $size = $_POST['size'];
                $quantity = $_POST['quantity'];
                if (isset($_POST['iddm'])) {
                    $iddm = $_POST['iddm'];
                } else {
                    echo "Dữ liệu danh mục không được gửi đến.";
                }

                $hinh = $_FILES['anhsp']['name'];
                $target_dir = "./uploads";
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $hinh)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                add_sanpham($name, $price, $des, $iddm, $hinh, $size, $quantity);
                $themThanhCong = "Thêm sản phẩm mới thành công";

                
            }
        include "./sanpham/themsp.php";
        break;

        case 'danhsachsp':
            $kyw = isset($_POST['kyw']) ? $_POST['kyw'] : '';
            $iddm = isset($_POST['iddm']) ? $_POST['iddm'] : 0;
            $listdanhmuc = load_all_categories();
            $listsanpham = loadall_sanpham($kyw, $iddm);
        include "./sanpham/danhsachsp.php";
        break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
        $listsanpham = loadall_sanpham("", 0);
        include "./sanpham/danhsachsp.php";
        break;

        case 'xemsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = load_sanpham_by_id($_GET['id']);
            }
        $listdanhmuc = load_all_categories();
        include "./sanpham/chitietsp.php";
        break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = load_sanpham_by_id($_GET['id']);
            }
        $listdanhmuc = load_all_categories();
        include "./sanpham/suasp.php";
        break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['tensp'];
                $price = $_POST['giasp'];
                $des = $_POST['mota'];
                $size = isset($_POST['size']) ? implode(',', $_POST['size']) : '';
                $quantity = $_POST['quantity'];
                $id = $_POST['id'];
        
                if (isset($_POST['iddm'])) {
                    $iddm = $_POST['iddm'];
                } else {
                    echo "Dữ liệu danh mục không được gửi đến.";
                    break;
                }
        
                $hinh = $_FILES['anhsp']['name'];
                $target_dir = "./uploads/";
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
        
                if (!empty($hinh)) {
                    if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                        $hinh = ''; 
                    }
                }
        
                update_sanpham($id, $iddm, $name, $price, $des, $hinh, $size, $quantity);
                $suaThanhCong = "Sửa sản phẩm thành công";
            }
        
        $listsanpham = loadall_sanpham("", 0);
        $categories = load_all_categories();
        include "./sanpham/danhsachsp.php";
        break;
        
        
        

        // Đăng nhập - đăng xuất
        case 'dangnhap':
        include "./login.php";
        break;

        case 'thoat':
            if (isset($_GET['act']) && $_GET['act'] == 'thoat') {
                $_SESSION = array();
            
                if (ini_get("session.use_cookies")) {
                    $params = session_get_cookie_params();
                    setcookie(session_name(), '', time() - 42000,
                        $params["path"], $params["domain"],
                        $params["secure"], $params["httponly"]
                    );
                }
                session_destroy();
                header("Location: login.php");
                exit;
            }
        include "./login.php";
        break;
        
        // Danh mục
        case 'themdm':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $name = $_POST['name'];
                
                
                add_danhmuc($name);
                $themdmthanhcong = "Thêm danh mục thành công";
            }
        include "./danhmuc/themdm.php";
        break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
        $categories = load_all_categories();
        include "./danhmuc/danhsachdm.php";
        break;
            

        case 'danhsachdm':
            $categories = load_all_categories();
           
        include "./danhmuc/danhsachdm.php";
        break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $category = load_danhmuc_by_id($_GET['id']);
            } else {
                $category = null; 
            }
        include "./danhmuc/suadm.php";
        break;
            
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                update_danhmuc($id, $name);
                $suadmthanhcong = "Sửa danh mục thành công";
            } 
            $categories = load_all_categories();
        include "./danhmuc/suadm.php";
        break;

        // Tài khoản
        case 'themtk':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $addr = $_POST['addr'];
                
                add_taikhoan($name, $email, $pass, $phone, $addr);
                $dktkthanhcong = "Thêm tài khoản mới thành công";
            }
        include "./taikhoan/themtk.php";
        break;

        case 'danhsachtk':
            $listtaikhoan = loadall_taikhoan(); 
        include "./taikhoan/danhsachtk.php"; 
        break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']); 
            }
            $listtaikhoan = loadall_taikhoan();
        include "./taikhoan/danhsachtk.php";
        break;
        
        case 'xemtk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $user_id = $_GET['id'];
                $taikhoan = load_one_taikhoan($user_id); 
            }
          
        include "./taikhoan/chitiettk.php";
        break;
            
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = load_one_taikhoan($_GET['id']);
            } else {
                $taikhoan = null; 
            }
        include "./taikhoan/suatk.php";
        break;
            

        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['addr'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $suatkthanhcong = "Sửa tài khoản thành công"; 
            }
        include "./taikhoan/suatk.php";
        break;
            
        //Bình luận
        
        case 'dinhluan':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = load_one_taikhoan($_GET['id']);
            } else {
                $taikhoan = null; 
            }
        include "./sanpham/chitietsp.php";
        break;
        
        default:
            include "thongke.php";
            break;
    }
} else {
    include "thongke.php";
}

include "./footer.php";
?>