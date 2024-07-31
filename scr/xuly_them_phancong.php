<?php
session_start();
include('ketnoi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idnhanvien = $_POST['idnhanvien'];
    $idtruc = $_POST['idtruc'];
    $id_sukien = isset($_POST['id_sukien']) ? $_POST['id_sukien'] : NULL;
    $idtq = isset($_POST['idtq']) ? $_POST['idtq'] : NULL;

    $trangthai = 'Đã phân công';
    $nguoiduyet = $_SESSION['hoten'];
    $ngayduyet = date('Y-m-d'); // Nếu cột ngayduyet là DATE

    // Chuẩn bị câu lệnh SQL
    if (empty($id_sukien)) {
        if (is_null($idtq)) {
            // Nếu $idtq là NULL, không đưa vào câu lệnh INSERT
            $sql = "INSERT INTO phancong (idnhanvien, idtruc, trangthai, nguoiduyet, ngayduyet) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('iisss', $idnhanvien, $idtruc, $trangthai, $nguoiduyet, $ngayduyet);
        } else {
            // Nếu $idtq có giá trị, đưa vào câu lệnh INSERT
            $sql = "INSERT INTO phancong (idnhanvien, idtruc, idtq, trangthai, nguoiduyet, ngayduyet) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('iissss', $idnhanvien, $idtruc, $idtq, $trangthai, $nguoiduyet, $ngayduyet);
        }
    } else {
        // Nếu có $id_sukien, đưa vào câu lệnh INSERT
        $sql = "INSERT INTO phancong (idnhanvien, idtruc, id, trangthai, nguoiduyet, ngayduyet) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iissss', $idnhanvien, $idtruc, $id_sukien, $trangthai, $nguoiduyet, $ngayduyet);
    }

    // Thực thi câu lệnh SQL
    if ($stmt->execute()) {
        echo "Phân công thành công!";
        // Chuyển hướng hoặc thông báo thành công
        header('Location: QL_PHANCONG.php');
        exit();
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng câu lệnh và kết nối
    $stmt->close();
    $conn->close();
}
?>
