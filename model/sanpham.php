<?php
function add_sanpham($tensp, $giasp, $mota, $iddm, $hinh, $size, $quantity) {
    try {
        $sql = "INSERT INTO tb_product (product_name, price, description, category_id, image, size_id, quantity) VALUES (:tensp, :giasp, :mota, :iddm, :hinh, :size, :quantity)";
        
        $args = [
            'tensp' => $tensp,
            'giasp' => $giasp,
            'mota' => $mota,
            'iddm' => $iddm,
            'hinh' => $hinh,
            'size' => $size,
            'quantity' => $quantity
        ];
        
        pdo_execute($sql, $args);
        
        return true;
    } catch (PDOException $e) {
        throw $e;
    }
}


function loadall_sanpham($kyw="", $iddm=0){
    $sql = "SELECT p.product_id, p.product_name, p.price, p.image, c.category_name, p.quantity
    FROM tb_product p
    INNER JOIN tb_category c ON p.category_id = c.category_id
    WHERE 1";

    if (!empty($kyw)) {
        $sql .= " AND p.product_name LIKE '%" . $kyw . "%'";
    }

    if ($iddm > 0) {
        $sql .= " AND p.category_id = '" . $iddm . "'";
    }

    $sql .= " ORDER BY p.product_id ASC";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function delete_sanpham($id) {
    try {
        $sql = "DELETE FROM tb_product WHERE product_id = :id";
        $args = [
            'id' => $id
        ];
        
        pdo_execute($sql, $args);
        
        return true;
    } catch (PDOException $e) {
        throw $e;
    }
}

function update_sanpham($id, $iddm, $name, $price, $des, $hinh, $size, $quantity) {
    $sql = "UPDATE tb_product SET category_id = :iddm, product_name = :name, price = :price, image = :hinh, description = :mota, quantity = :quantity, size_id = :size WHERE product_id = :id";
    pdo_execute($sql, [
        ':iddm' => $iddm,
        ':name' => $name,
        ':price' => $price,
        ':hinh' => $hinh,
        ':mota' => $des,
        ':quantity' => $quantity,
        ':size' => $size,
        ':id' => $id
    ]);
}



function load_sanpham_by_id($product_id) {
    $sql = "SELECT p.product_id, p.product_name, p.price, p.image, p.description, p.category_id, c.category_name, s.size_name, p.quantity
            FROM tb_product p
            INNER JOIN tb_category c ON p.category_id = c.category_id
            LEFT JOIN tb_size s ON p.size_id = s.size_id
            WHERE p.product_id = :product_id";
    $conn = pdo_get_connection(); 
    $stmt = $conn->prepare($sql);
    $stmt->execute([':product_id' => $product_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


//load sp trang chủ

function loadall_sanpham_home(){
    $sql = "SELECT p.product_id, p.product_name, p.price, p.image, c.category_name, p.quantity
    FROM tb_product p
    INNER JOIN tb_category c ON p.category_id = c.category_id
    WHERE 1";

    $sql .= " ORDER BY p.product_id DESC limit 0,8";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}



function load_sanpham_cungloai($product_id) {
    $current_product = load_sanpham_by_id($product_id);
    $category_id = $current_product['category_id'];

    $sql = "SELECT p.product_id, p.product_name, p.price, p.image, p.description, c.category_name
            FROM tb_product p
            INNER JOIN tb_category c ON p.category_id = c.category_id
            WHERE p.category_id = :category_id AND p.product_id <> :product_id";
    
    $conn = pdo_get_connection(); 
    $stmt = $conn->prepare($sql);
    $stmt->execute([':category_id' => $category_id, ':product_id' => $product_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function loadall_sanpham_sanpham(){
    $sql = "SELECT p.product_id, p.product_name, p.price, p.image, c.category_name, p.quantity
    FROM tb_product p
    INNER JOIN tb_category c ON p.category_id = c.category_id
    WHERE 1";

    $sql .= " ORDER BY p.product_id DESC limit 0,16";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}




?>