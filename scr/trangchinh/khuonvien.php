<?php 
include("htrangchu.php");
?>



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khuôn viên</title>
    <link rel="stylesheet" href="txt.css">
</head>

<body>
<div class="nhatho">
        <label style="margin: 18px 336px"> Khuôn viên trong Đền thờ</label>

    </div>
    
    <section class="introduction">
        <img src="hinhanh\img\2.jpg" alt="Hình ảnh lớn" class="large-image">
        <img src="hinhanh\img\1.jpg" alt="Hình ảnh lớn" class="large-image">
        
    </section>
    <label class="lb"style="margin-left:453px;"> Hình ảnh nhà dừng chân khi bước vào khuôn viên Đền thờ</label>
    <div class="info">
        <p> Khu nhà dừng chân được xây dựng sau này nhằm giúp mọi người  khi đến tham quan tại Đền thờ tạm nghỉ chân, chụp ảnh, bên cạnh
            đó còn là nới để hội họp, tuyên truyền lịch sử, nơi để các thanh niên tổ chức thuyết trình cho học sinh hay sinh viên về 
             lịch sử nguồn gốc hình thành ngôi đền, cũng là nơi tuyên truyền giáo dục về Đảng.
        </p>
       
    </div>
    
    <section class="gallery">
        <div class="left-image" onclick="switchImage(this)">
            <img src="hinhanh\img\12.jpg" alt="Hình ảnh nhỏ 1">
        </div>
        <div class="right-images">
            <div class="image-container" onclick="switchImage(this)">
                <img src="hinhanh\img\8.jpg" alt="Hình ảnh nhỏ 1">
            </div>
            <div class="image-container" onclick="switchImage(this)">
                <img src="hinhanh\img\15.jpg" alt="Hình ảnh nhỏ 2">
            </div>
            <div class="image-container" onclick="switchImage(this)">
                <img src="hinhanh\img\21.jpg" alt="Hình ảnh nhỏ 3">
            </div>
        </div>
    
        <div class="info4">
            <p>Trong quá trình đấu tranh bảo vệ Đền thờ cùng với tinh thần quyết chiến thì có những chiến công, phá tan đồn địch, phá tan,
                bắn hạ vũ khí bằng chứng chính là quân dân chúng ta hạ được 2 khẩu pháo và trực thăng của địch. Hai hiện vật đang trưng bày 
                trong khuôn viên của Đền thờ, để mọi nhìn thấy và có ngụ ý rằng khí tài quân địch có mạnh bao nhiêu cũng không thắng nổi lòng yêu
                nước của người dân.
              
           
        </div>
    </section>
    <label class="lb4"> Hình ảnh khẩu pháo và trực thăng được trưng bày trong khuôn viên</label>
    
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
            <p>khuôn viên cây xanh với hàng trăm giống cây mang giá trị lịch sử, văn hóa do lãnh đạo Trung ương và 
                địa phương cùng người dân trồng lưu niệm, đã tạo ra hệ sinh thái thực vật phong phú, đa dạng. 
                Những hàng cây đã trở nên thân thuộc, in đậm trong ký ức những ai đặt chân đến tham quan, viếng Bác.
            </p>
        </div>

       
        <div class="square-gallery">
            <img src="hinhanh/img/55.jpg" alt="Hình ảnh lớn">
            <img src="hinhanh/img/53.jpg" alt="Hình ảnh nhỏ 1">
            <img src="hinhanh/img/54.jpg" alt="Hình ảnh nhỏ 2">
        </div>
        
    </section>
    <label class="lb2"> Hình ảnh được bao phủ cây xanh lâu đời trong Đền thờ</label>

    <section class="photo-section">
        <div class="photo-row">
            <img src="hinhanh/img/4.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/13.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/59.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/61.jpg" alt="Ảnh 1" class="photo">
        </div>
        <!-- <div class="photo-row">
            <img src="hinhanh/img/30.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/11.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/32.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/32.jpg" alt="Ảnh 1" class="photo">
        </div> -->
        
        <label class="lb3"> Hình ảnh các cây xanh trong khuôn viên</label>

        <div class="info3">
            <p>Hàng năm, khu di tích đón khoảng 100.000 lượt khách đến tham quan, viếng Bác và là địa điểm sinh hoạt chính trị, 
                văn hóa của Đảng bộ và nhân dân tỉnh Trà Vinh. Lễ giỗ Bác Hồ hằng năm, các cấp ủy, 
                chính quyền tỉnh Trà Vinh cùng các tầng lớp nhân dân đều quy tụ về Đền thờ dâng hoa, dâng hương, viếng Bác.
            </p>
        </div>
    </section>


    <section class="photo-section">
        <div class="photo-row1">
            <img src="hinhanh/img/71.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/78.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/79.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/77.jpg" alt="Ảnh 1" class="photo">
        </div>
        <!-- <div class="photo-row1">
            <img src="hinhanh/img/36.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/50.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/34.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/40.jpg" alt="Ảnh 1" class="photo">
        </div> -->
        
        <label class="lb3"> Hình ảnh xung quanh bờ hồ </label>

        <div class="info3">
            <p>Công viên với hồ sen lớn hài hòa cùng trăm loại cây xanh tỏa bóng mát; nhiều loài hoa quanh năm khoe sắc rực rỡ. 
                Không gian thoáng đãng mát mẻ; dễ chịu.
                Trong đó; những tán còng cổ thụ và lũy tre bao quanh cùng hệ thống hầm hào; công sự là nhân chứng của quá trình xây dựng; 
                chiến đấu bảo vệ ngôi Đền; được phục hồi tôn tạo giữ gìn.
            </p>
        </div>
    </section>
    
   
</body>
</html>
<?php include("fortrangchu.php"); ?>
<style>
  .nav.navbar-nav.navbar-right > li:nth-child(1) a {
    color: #ffb239; /* Màu bạn muốn hiển thị cho liên kết hiện tại */
    font-weight: bold; /* In đậm để nhấn mạnh */
}

</style>
