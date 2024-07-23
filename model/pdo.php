<?php
function pdo_get_connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan2024", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function pdo_execute($sql, $sql_args = []) {
    try {
        $conn = pdo_get_connection();
        
        $stmt = $conn->prepare($sql);
        foreach ($sql_args as $key => &$value) {
            $stmt->bindParam($key, $value);
        }
        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}



function pdo_executeid($sql, ...$params)
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $lastInsertId = $conn->lastInsertId();

        return $lastInsertId;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query($sql, $params = array()) {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch(PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

?>