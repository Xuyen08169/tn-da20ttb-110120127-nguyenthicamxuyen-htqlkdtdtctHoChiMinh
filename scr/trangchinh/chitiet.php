<?php 
include("htrangchu.php");
?>
<style>

.tieude{

    font-size: 25px;
    text-align: center;
    margin-top: 21px;
    color: #ff3e3e;
    font-family: system-ui;
}
.noidung{

    padding: 20px;
    background-color: #ffc7c7;
    border-radius: 10px;
    margin: 20px 185px;
    text-align: justify;
    line-height: 1.4;
    font-family: system-ui;
}
 .ngay{

    margin-left: 130px;
    font-family: system-ui;
    margin-top: 20px;
    font-style: italic;
 }

</style>


<?php
// Kết nối cơ sở dữ liệu
include("../ketnoi.php");

// Kiểm tra xem có ID bài viết không
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Chuyển ID về dạng số nguyên để tránh SQL injection

    // Truy vấn bài viết từ cơ sở dữ liệu
    $sql = "SELECT tieude, noidung, ngaydang FROM tintuc WHERE idtintuc = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $originalDate = $row["ngaydang"];
        $formattedDate = (new DateTime($originalDate))->format('d/m/Y');

        echo '<div class="news-details">';
        echo '<h1 class="tieude">' . $row["tieude"] . '</h1>';
        echo '<p class="ngay"><strong>Ngày đăng: </strong>' . $formattedDate . '</p>';
        echo '<div class="noidung">' . $row["noidung"] . '</div>';
        echo '</div>';
    } else {
        echo "Không tìm thấy bài viết.";
    }
} else {
    echo "ID bài viết không được cung cấp.";
}

$conn->close();
?>
<?php 
include("fortrangchu.php");
?>
<style>
  .nav.navbar-nav.navbar-right > li:nth-child(3) a {
    color: #ffb239; /* Màu bạn muốn hiển thị cho liên kết hiện tại */
    font-weight: bold; /* In đậm để nhấn mạnh */
}

</style>

