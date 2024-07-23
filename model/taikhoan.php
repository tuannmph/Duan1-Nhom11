<?php
function checkuser($email, $password)
{
    try {
        $sql = "SELECT * FROM tb_user WHERE email = ? AND password = ?";
<<<<<<< HEAD
        $params = [$email, $password]; 

        $user = pdo_query_one($sql, ...$params);

        return $user; 
=======
        $params = [$email, $password]; // Đưa các tham số vào một mảng để truyền vào hàm pdo_query_one

        $user = pdo_query_one($sql, ...$params);

        return $user; // Trả về mảng dữ liệu người dùng nếu tìm thấy, hoặc null nếu không tìm thấy
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
    } catch (PDOException $e) {
        throw $e;
    }
}

<<<<<<< HEAD
function add_taikhoan($name, $email, $pass) {
    try {
        $sql = "INSERT INTO tb_user (user_name,email, password) VALUES (:name, :email, :pass)";
=======
function add_taikhoan($name, $email, $pass, $phone, $addr) {
    try {
        $sql = "INSERT INTO tb_user (user_name,email, password, phone, address) VALUES (:name, :email, :pass, :phone, :addr)";
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
        
        $args = [
            'name' => $name,
            'email' => $email,
            'pass' => $pass,
<<<<<<< HEAD
            // 'phone' => $phone,
            // 'addr' => $addr,
=======
            'phone' => $phone,
            'addr' => $addr,
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
            
        ];
        
        pdo_execute($sql, $args);
        
        return true;
    } catch (PDOException $e) {
        throw $e;
    }
}

function loadall_taikhoan($kyw="", $iddm=0){
    $sql = "SELECT user_id, user_name, email, password, phone, address
            FROM tb_user
            WHERE 1";

    if (!empty($kyw)) {
        $sql .= " AND user_name LIKE '%" . $kyw . "%'";
    }

    $sql .= " ORDER BY user_id ASC";

    $list_taikhoan = pdo_query($sql); 
    return $list_taikhoan;
}

function delete_taikhoan($id) {
    try {
        $sql = "DELETE FROM tb_user WHERE user_id = :id";
        $args = [
            'id' => $id
        ];
        
        pdo_execute($sql, $args);
        
        return true;
    } catch (PDOException $e) {
        throw $e;
    }
}

function load_one_taikhoan($user_id) {
    $sql = "SELECT * FROM tb_user WHERE user_id = :user_id";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([':user_id' => $user_id]);
    $taikhoan = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $taikhoan;
}


function update_taikhoan($id, $user, $pass, $email, $address, $tel) {
    $sql = "UPDATE tb_user SET user_name = :user, password = :pass, email = :email, address = :address, phone = :tel WHERE user_id = :id";
    
    $args = [
        'user' => $user,
        'pass' => $pass,
        'email' => $email,
        'address' => $address,
        'tel' => $tel,
        'id' => $id
    ];

    pdo_execute($sql, $args);
}

?>