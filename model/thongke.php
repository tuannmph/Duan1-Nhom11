<?php

function get_product_count_by_category() {
    $sql = "
        SELECT tb_category.category_name AS cate_name, COUNT(tb_product.category_id) AS number_cate 
        FROM tb_category 
        LEFT JOIN tb_product ON tb_category.category_id = tb_product.category_id 
        GROUP BY tb_category.category_id
    ";

    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
        return []; 
    }
}

?>