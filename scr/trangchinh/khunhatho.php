<?php 
include("htrangchu.php");
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khu nhà thờ</title>
    <link rel="stylesheet" href="txt.css">
</head>
<div>

    <div class="nhatho">
        <label style="margin: 18px 336px"> Khu Nhà Thờ</label>

    </div>

    <div class="">
       

    <section class="introduction">
        <img src="hinhanh\img\68.jpg" alt="Hình ảnh lớn" class="large-ima">
        
    </section>
    <label class="lb" style="margin-left: 531px;"> Hình phía trước khu Nhà thờ</label>
    <div class="info">
            <p> Sau ngày Bác Hồ qua đời, trong niềm kính yêu và tiếc thương vô hạn, Thị ủy Trà Vinh đã bàn kế hoạch cùng
                quân và
                dân Long Đức quyết định dựng Đền thờ Bác Hồ. Vị trí chọn để dựng Đền là giồng cát cao, có lũy tre bao
                bọc tại ấp Vĩnh Hội.

            </p>
            <p>Khu di tích đền thờ Bác Hồ trong một khuôn viên rộng 5,4 ha với các hạng mục chính như:
                Đền thờ Bác Hồ; nhà trưng bày thân thế sự nghiệp Chủ tịch Hồ Chí Minh; cây xanh hoa kiểng; ao cá; khu
                vui chơi cắm trại…
                và đặc biệt là mô hình Nhà sàn như nơi Bác Hồ sinh sống và làm việc ở Hà Nội.
            </p>
        </div>

        <!-- <section class="introduction">
            <img src="hinhanh\img\68.jpg" alt="Hình ảnh lớn" class="large-ima">

        </section>
        <label class="lb" style="margin-left:529px;"> Hình ảnh phía trước khu nhà thờ chính</label> -->

        <section class="gallery">
            <div class="left-image" onclick="switchImage(this)">
                <img src="hinhanh\img\6.jpg" alt="Hình ảnh nhỏ 1">
            </div>
            <div class="right-images">
                <div class="image-container" onclick="switchImage(this)">
                    <img src="hinhanh\img\70.jpg" alt="Hình ảnh nhỏ 1">
                </div>
                <div class="image-container" onclick="switchImage(this)">
                    <img src="hinhanh\img\71.jpeg" alt="Hình ảnh nhỏ 2">
                </div>
                <div class="image-container" onclick="switchImage(this)">
                    <img src="hinhanh\img\69.jpg" alt="Hình ảnh nhỏ 3">
                </div>
               
            </div>
            <label class="lbl-b"> Hình ảnh bên trong khu nhà thờ </label>

            <div class="info1">
                <p>Nhà thờ được thiết kế theo dạng một đóa sen cách điệu màu hồng tươi.
                    Bên trong; ngôi Đền được phục chế lại theo đúng nguyên trạng khiêm tốn; đơn sơ; với kích thước 4 x 4
                    m bằng khung gỗ;
                    mái lợp lá; vách tôn. Bên trong là ảnh Bác được giữa, mọi người, hay du khách gần xa có thể vào để
                    thấp hương cho Bác.
                    Nơi đây cũng đặc biệt đã từng đón chào các vị lãnh đạo trong nước về viếng thăm đền thờ. Đền thờ đặt
                    trên một hồ cá trong xanh với
                    những chú cá lâu năm và to lớn, có cả những chú rùa cùng với nhiều loài cá khác nhau tạo nên màu sắc
                    rực rỡ, du khách có thể cho cá ăn, tuy cá được nuôi rất nhiều nhưng chúng di chuyển rất yên tĩnh và
                    rất hiền lành khi du khách đến gần vô cũng thân thiện giống như tính tình của con người nơi đây.
                </p>

            </div>

        </section>



        <script>
        function switchImage(container) {
            // Lấy ảnh trong div được click
            var clickedImage = container.querySelector('img');

            // Lấy ảnh trong div bên trái
            var leftImage = document.querySelector('.left-image img');

            // Nếu có ảnh trong div bên trái và không phải là ảnh đã click
            if (leftImage && leftImage !== clickedImage) {
                // Lấy src của ảnh đã click
                var clickedSrc = clickedImage.src;

                // Đặt src của ảnh đã click thành src của ảnh bên trái
                clickedImage.src = leftImage.src;

                // Đặt src của ảnh bên trái thành src của ảnh đã click trước đó
                leftImage.src = clickedSrc;
            }
        }
        </script>

        <section class="gallery-container">

            <div class="info2">
                <p>Sau khi dân hương mọi người đi tham quang 1 vòng bên trong khu nhà. Hai bên là dãy hình ảnh
                    với những kỉ niệm các vị lãnh đạo từng ghé thăm, các sự kiện đáng nhớ tại Đền thờ.
                    Quá trình gìn giữ phát triển, xây dựng tu sửa các khu vực trong ngôi đền, hình ảnh, các thanh niên
                    tuổi trẻ cùng nhau trồng
                    bóng cây xanh che phủ cho ngôi đền. Dọc hai bên đường vào khu nhà thờ chính là những hàng cây quý
                    lâu đời, được nhiều người
                    và các vị lãnh đạo thân tặng trồng xung quanh đền thờ, tạo nên một môi trường thiên nhiên mát mẻ.
                    Nhưng được cắt tỉa rất gọn gàng và
                    sạch sẽ. Cây xanh rất nhiều nhưng không có vẻ hoang sơ mà mang một sự trong lành làm nổi bật sự tôn
                    nghiêm cho đền thờ.
                </p>
            </div>


            <div class="square-gallery">
                <img src="hinhanh/img/60.jpg" alt="Hình ảnh lớn">
                <img src="hinhanh/img/56.jpg" alt="Hình ảnh nhỏ 1">
                <img src="hinhanh/img/57.jpg" alt="Hình ảnh nhỏ 2">
            </div>

        </section>
        <label class="lb2" style="margin-left:745px;"> Hình ảnh, tài liệu quá trình xây dựng và bảo vệ Đền thờ</label>

        <section class="photo-section">
            <div class="photo-row">
                <img src="hinhanh/img/58.jpg" alt="Ảnh 1" class="photo">
                <img src="hinhanh/img/72.jpg" alt="Ảnh 1" class="photo">

            </div>
            <div class="photo-row">
                <img src="hinhanh/img/82.jpg" alt="Ảnh 1" class="photo">
                <img src="hinhanh/img/81.jpg" alt="Ảnh 1" class="photo">
                <img src="hinhanh/img/83.jpg" alt="Ảnh 1" class="photo">

            </div>

            <label class="lb3"> Hình ảnh xung quanh khu nhà thờ</label>

            <div class="info3">
                <p>Du lịch Trà Vinh thăm Khu di tích đền thờ Bác Hồ; thắp một nén hương tỏ lòng biết ơn;
                    xem hiện vật trưng bày; nghe những câu chuyện cảm động về lịch sử xây dựng và bảo vệ đền thờ Bác…;
                    càng thấy tình cảm lớn lao chân thành của đồng bào nơi đây dành cho vị lãnh tụ vĩ đại của dân tộc.
                </p>
            </div>
        </section>

        <!-- 
    <section class="photo-section">
        <div class="photo-row1">
            <img src="hinhanh/img/58.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/72.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/73.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/74.jpg" alt="Ảnh 1" class="photo">
        </div>
        <div class="photo-row1">
            <img src="hinhanh/img/36.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/50.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/34.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/40.jpg" alt="Ảnh 1" class="photo">
        </div>
        
        <label class="lb3"> Hình ảnh </label>

        <div class="info3">
            <p>Hình ảnh trên các mẩu tích bom đạn, trong quá trình xây dựng Đền thờ bị địch chống phá, nhưng người dân nơi đây không nản lòng
                ngày đêm xây dựng không ngừng nghỉ, địch bắn phá ở đâu mọi người xây lại chỗ đó, chiến đấu ác liệt, có những người hi sinh, còn những
                người ở lại tiếp tục chiến đấu, bảo vệ đền thờ. Kèm theo đó hình ảnh những người có công xây dựng và bảo vệ Đền thờ, những người con mảnh đất   Trà Vinh
                yêu nước, tinh thần chiến đầu không sợ chết.
            </p>
        </div>
    </section>
     -->


    </div>



</div>



<?php include("fortrangchu.php"); ?>
<style>
  .nav.navbar-nav.navbar-right > li:nth-child(1) a {
    color: #ffb239; /* Màu bạn muốn hiển thị cho liên kết hiện tại */
    font-weight: bold; /* In đậm để nhấn mạnh */
}

</style>
