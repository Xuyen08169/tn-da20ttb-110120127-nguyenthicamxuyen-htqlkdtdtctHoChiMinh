<?php
include("ketnoi.php");

// Lấy dữ liệu từ form
$idtintuc = $_POST["idtintuc"];
$tieude = $_POST["tieude"];
$noidung = $_POST["noidung"];
$ngaydang = $_POST["ngaydang"];
$idnhanvien = $_POST["idnhanvien"];
$noibat = $_POST["noibat"];

// Đường dẫn lưu trữ hình ảnh
$thu_muc_luu_tru = "./trangchinh/hinhanh/";
$ten_tap_tin = basename($_FILES["anhtt"]["name"]);
$duongdan_luu_tru = $thu_muc_luu_tru . $ten_tap_tin;

// Di chuyển tệp tải lên đến thư mục đích
if (move_uploaded_file($_FILES["anhtt"]["tmp_name"], $duongdan_luu_tru)) {
    // Đường dẫn lưu trong cơ sở dữ liệu
    $anhtt = './hinhanh/' . $ten_tap_tin;

    // Thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tintuc (idtintuc, tieude, noidung, ngaydang, anhtt, idnhanvien, noibat) 
            VALUES ('".$idtintuc."', '".$tieude."', '".$noidung."', '".$ngaydang."', '".$anhtt."', '".$idnhanvien."', '".$noibat."')";
    $kq = mysqli_query($conn, $sql) or die("Không thể thêm: " . mysqli_error($conn));

    if ($kq) {
        echo "<script language=javascript>
                alert('Thêm thành công');
                window.location='QLTT.php';
              </script>";
    } else {
        echo "<script language=javascript>
                alert('Thêm thất bại');
                window.location='QLTT.php';
              </script>";
    }
} else {
    echo "Có lỗi xảy ra khi tải lên tệp.";
}

mysqli_close($conn);
?>
