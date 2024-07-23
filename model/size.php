<?php
function load_all_sizes() {
    try {
        $conn = pdo_get_connection(); // Hàm này để lấy kết nối PDO
        $stmt = $conn->query("SELECT * FROM tb_size ORDER BY size_id ASC");
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    } catch(PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}


?>