<?php
include("ketnoi.php");

// Lấy dữ liệu từ form
$idnhanvien = $_POST["idnhanvien"];
$hoten = $_POST["hoten"];
$ngaysinh = $_POST["ngaysinh"];
$gioitinh = $_POST["gioitinh"];
$sodienthoai = $_POST["sodienthoai"];

$idchucvu = $_POST["idchucvu"];
$idnhomto = $_POST["idnhomto"];

$email = $_POST["email"];
$matkhau = $_POST["matkhau"];
$quyen = $_POST["quyen"];

// Kiểm tra xem idnhomto có tồn tại trong bảng nhomto không
$check_nhomto_sql = "SELECT * FROM nhomto WHERE idnhomto = '".$idnhomto."'";
$check_nhomto_result = mysqli_query($conn, $check_nhomto_sql);

if (mysqli_num_rows($check_nhomto_result) == 0) {
    die("Giá trị idnhomto không tồn tại trong bảng nhomto.");
}

// Xử lý hình ảnh tải lên
$hinhanh = ''; // Biến lưu đường dẫn hình ảnh sau khi tải lên

if (isset($_FILES["hinhanh"]) && $_FILES["hinhanh"]["name"] != "") {
    $duongdan = "./hinhanh/";
    $ten_file = basename($_FILES["hinhanh"]["name"]); // Lấy tên file gốc
    $duongdan = $duongdan . $ten_file; // Đường dẫn đầy đủ để lưu file

    // Di chuyển file tải lên vào đường dẫn đã chỉ định
    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $duongdan)) {
        $hinhanh = $duongdan; // Lưu đường dẫn hình ảnh sau khi tải lên thành công
    } else {
        die("Không thể tải lên hình ảnh.");
    }
}

// Thêm nhóm tổ mới vào CSDL
$sql = "INSERT INTO taikhoan (idnhanvien, hoten, ngaysinh, gioitinh, sodienthoai, idchucvu, idnhomto, email, hinhanh, matkhau, quyen) VALUES 
    ('".$idnhanvien."', '".$hoten."', '".$ngaysinh."', '".$gioitinh."', '".$sodienthoai."', '".$idchucvu."', '".$idnhomto."', '".$email."', '".$hinhanh."', '".$matkhau."', '".$quyen."')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm: " . mysqli_error($conn));

if ($kq) {
    echo "<script language=javascript>
            alert('Thêm thành công');
            window.location='QLTK.php';
          </script>";
} else {
    echo "<script language=javascript>
            alert('Thêm thất bại');
            window.location='QLTK.php';
          </script>";
}
?>

