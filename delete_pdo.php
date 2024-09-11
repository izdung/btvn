<?php
$host = "localhost";   
$dbname = "bai5"; 
$username = "root";    
$password = "";        
// Tạo chuỗi kết nối (DSN)
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";


    // Tạo đối tượng PDO
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
        die();
    }

    // ID của bản ghi cần xóa
    $id = 8; 

    // Câu lệnh SQL để xóa dữ liệu
    $sql = 'DELETE FROM users WHERE id = :id';
    
    // Chuẩn bị câu lệnh SQL
    $stmt = $pdo->prepare($sql);
    
    // Liên kết tham số
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    // Thực hiện câu lệnh
    $stmt->execute();
    
    // Kiểm tra số bản ghi bị xóa
    if ($stmt->rowCount() > 0) {
        echo "Bản ghi đã được xóa thành công!";
    } else {
        echo "Không tìm thấy bản ghi nào với ID: $id.";
    }

?>