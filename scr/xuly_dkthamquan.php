<?php
include("ketnoi.php");

// Kiểm tra xem tất cả dữ liệu cần thiết có được gửi lên không
if (!isset($_POST["idtq"]) || !isset($_POST["hoten"]) || !isset($_POST["sdt"]) || !isset($_POST["diachi"]) || !isset($_POST["email"]) || !isset($_POST["tendoan"]) || !isset($_POST["ngaythamquan"]) || !isset($_POST["soluong"]) || !isset($_POST["ghichu"])) {
    die("Dữ liệu gửi lên không đầy đủ.");
}

// Lấy dữ liệu từ form và bảo vệ chống SQL Injection
$idtq = mysqli_real_escape_string($conn, $_POST["idtq"]);
$hoten = mysqli_real_escape_string($conn, $_POST["hoten"]);
$sdt = mysqli_real_escape_string($conn, $_POST["sdt"]);
$diachi = mysqli_real_escape_string($conn, $_POST["diachi"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$tendoan = mysqli_real_escape_string($conn, $_POST["tendoan"]);
$ngaythamquan = mysqli_real_escape_string($conn, $_POST["ngaythamquan"]);
$soluong = mysqli_real_escape_string($conn, $_POST["soluong"]);
$ghichu = mysqli_real_escape_string($conn, $_POST["ghichu"]);

$trangthai = "Chờ duyệt";

// Thêm nhóm tổ mới vào CSDL
$sql = "INSERT INTO dkthamquan (idtq, hoten, sdt, diachi, email, tendoan, ngaythamquan, soluong, ghichu, trangthai) 
        VALUES ('$idtq', '$hoten', '$sdt', '$diachi', '$email', '$tendoan', '$ngaythamquan', '$soluong', '$ghichu', '$trangthai')";

$kq = mysqli_query($conn, $sql);

if ($kq) {
    echo "<script language='javascript'>
            alert('Thêm thành công');
            window.location.href = 'dangki_thamquan.php';
          </script>";
} else {
    echo "<script language='javascript'>
            alert('Thêm thất bại: " . mysqli_error($conn) . "');
            window.location.href = 'dangki_thamquan.php';
          </script>";
}
?>
