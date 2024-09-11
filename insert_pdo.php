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

// Chuẩn bị câu lệnh SQL
$sql = 'INSERT INTO my_contacts (id, full_names, gender, contact_no, email, city, country) 
        VALUES (:id, :full_names, :gender, :contact_no, :email, :city, :country)';

$stmt = $conn->prepare($sql);

// Gán giá trị vào các tham số
$data = array(
    ':id' => 8, 
    ':full_names' => 'Jake', 
    ':gender' => 'Male', 
    ':contact_no' => '223', 
    ':email' => 'jake@olympus.mt.co', 
    ':city' => 'New York', 
    ':country' => 'USA'
);

// Thực hiện câu lệnh
$stmt->execute($data);

echo "Dữ liệu đã được thêm thành công!";
?>

?>