<?php
$dbh = mysqli_connect('localhost', 'root', '', database: 'bai5'); 
// Kết nối với MySQL Server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_connect_error()); 
// Thông báo lỗi nếu kết nối thất bại

$id = 4; 
// ID của Venus trong CSQL

$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh,$sql_stmt); 
// Thực thi câu lệnh SQL

if (!$result) {
    die("Deleting record failed: " . mysqli_connect_error());
    // Thông báo lỗi nếu thực thi thất bại 
} else {
    echo "ID number $id has been successfully deleted";
}

mysqli_close($dbh); // Đóng kết nối CSDL

?>

