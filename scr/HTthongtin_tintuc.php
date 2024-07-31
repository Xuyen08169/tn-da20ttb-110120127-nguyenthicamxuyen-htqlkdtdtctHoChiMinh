
<?php
include("ketnoi.php");

if (isset($_GET['id'])) {
    $eventId = intval($_GET['id']); // Lấy ID sự kiện từ yêu cầu GET

    // Truy vấn cơ sở dữ liệu để lấy thông tin chi tiết sự kiện
    $sql = "SELECT tintuc.*, taikhoan.hoten
            FROM  tintuc
            JOIN taikhoan ON tintuc.idnhanvien = taikhoan.idnhanvien
            WHERE tintuc.idtintuc = $eventId";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $event = mysqli_fetch_assoc($result);

        // Chuyển đổi đường dẫn lưu trong cơ sở dữ liệu thành đường dẫn thực tế trên máy chủ
        $anhtt_hienthi = str_replace('./hinhanh/', './trangchinh/hinhanh/', $event['anhtt']);

        // Hiển thị thông tin chi tiết sự kiện
        echo "<p><strong>ID:</strong> " . htmlspecialchars($event['idtintuc']) . "</p>";
        echo "<p><strong>Tiêu đề:</strong> " . htmlspecialchars($event['tieude']) . "</p>";
        echo "<p><strong>Nội dung:</strong> " . nl2br(strip_tags(htmlspecialchars_decode($event['noidung']))) . "</p>";

        echo "<p><strong>Ngày đăng:</strong> " . date('d/m/Y', strtotime($event['ngaydang'])) . "</p>";

        echo "<p><strong></strong> <img src='" . htmlspecialchars($anhtt_hienthi) . "' 
        alt='Hình ảnh' style='width:100px; margin-left: 130px;'></p>";

        echo "<p><strong>Tên nhân viên:</strong> " . htmlspecialchars($event['hoten']) . "</p>";
    } else {
        echo "<p>Không tìm thấy tin tức.</p>";
    }
} else {
    echo "<p>ID tin tức không hợp lệ.</p>";
}

mysqli_close($conn);
?>
