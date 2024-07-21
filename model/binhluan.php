<?php
function loadall_binhluan($id_sanpham) {
    $sql = "SELECT bl.*, u.user_name 
            FROM tb_binhluan bl
            LEFT JOIN tb_user u ON bl.id_user = u.user_id 
            WHERE bl.id_binhluan= :id_sanpham
            ORDER BY bl.id DESC";

    $params = ['id_sanpham' => $id_sanpham];
    $listbl = pdo_query($sql, $params);
    return $listbl;
}



?>