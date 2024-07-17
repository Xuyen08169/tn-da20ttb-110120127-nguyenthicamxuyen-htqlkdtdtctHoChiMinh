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

// Kiểm tra tệp tải lên
if ($_FILES["anhtt"]["size"] > 0 && move_uploaded_file($_FILES["anhtt"]["tmp_name"], $duongdan_luu_tru)) {
    // Đường dẫn lưu trong cơ sở dữ liệu
    $anhtt = './hinhanh/' . $ten_tap_tin;

    // Câu lệnh SQL cập nhật
    $sql = "UPDATE tintuc 
            SET tieude='$tieude', noidung='$noidung', ngaydang='$ngaydang', anhtt='$anhtt', idnhanvien='$idnhanvien', noibat='$noibat' 
            WHERE idtintuc='$idtintuc'";

    $kq = mysqli_query($conn, $sql);

    if ($kq) {
        echo "<script language=javascript>
                alert('Cập nhật thành công');
                window.location='QLTT.php';
              </script>";
    } else {
        echo "<script language=javascript>
                alert('Cập nhật thất bại');
                window.location='QLTT.php';
              </script>";
    }
} else {
    echo "<script language=javascript>
            alert('Có lỗi xảy ra khi tải lên tệp.');
            window.location='QLTT.php';
          </script>";
}

mysqli_close($conn);
?>
