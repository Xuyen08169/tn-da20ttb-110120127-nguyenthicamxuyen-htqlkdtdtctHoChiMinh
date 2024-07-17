<?php 
include("htrangchu.php");
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khu trưng bày</title>
    <link rel="stylesheet" href="txt.css">
</head>

<body>
<div class="nhatho">
        <label style="margin: 18px 336px"> Khu Nhà Trưng Bày</label>

    </div>
    <div class="inff">
        <p> Nằm bên cạnh khu Nhà thờ, tại đây là Nhà trưng bày nơi lưu trữ các hình ảnh tài liệu, những mảnh di tích, liên quan đến lịch sử
            hình thành, và quá trình đấu tranh bảo vệ ngôi Đền trước sự chống phá của kẻ thù.
        </p>
        <p>Những ghi chép, hình ảnh nơi đây cho chúng ta thấy rõ tấm lòng yêu nươc và tôn kính Bác của những người dân Trà Vinh, việc xây dựng
            Đền thờ không chỉ là việc tưởng nhớ Bác mà còn tấm lòng yêu nước son sắc của người dân địa phương nói riêng và cả nước nói chung
            dành cho vị lãnh tụ đã cống hiến cả cuộc đời cho sự nghiệp dân tộc, cũng để cho quân thù thấy rõ được tấm lòng yêu nước, tinh thần chiến đấu,
            bất diệt, sẵn sàn hi sinh bảo vệ tổ quốc
        </p>
    </div>
    <section class="introduction">
       
        <img src="hinhanh\img\52.jpg" alt="Hình ảnh lớn" class="large-image">
        <img src="hinhanh\img\22.jpg" alt="Hình ảnh lớn" class="large-image">
       
    </section>
    <label class="lb" style="margin-left:554px;"> Hình phía trước nhà trưng bày</label>

    <section class="gallery1">
        <div class="left-image" onclick="switchImage(this)">
            <img src="hinhanh\img\44.jpg" alt="Hình ảnh nhỏ 1">
        </div>
        <div class="right-images">
            <div class="image-container" onclick="switchImage(this)">
                <img src="hinhanh\img\45.jpg" alt="Hình ảnh nhỏ 1">
            </div>
            <div class="image-container" onclick="switchImage(this)">
                <img src="hinhanh\img\48.jpg" alt="Hình ảnh nhỏ 2">
            </div>
            <div class="image-container" onclick="switchImage(this)">
                <img src="hinhanh\img\46.jpg" alt="Hình ảnh nhỏ 3">
            </div>
            
        </div>
    
        <div class="in">
            <p>Nhà Trưng bày được xây dựng theo kiến trúc truyền thống dân tộc. Trong đó, nhiều hiện vật, hình ảnh, 
                tài liệu giúp người tham quan hiểu được một cách khái quát về cuộc đời hoạt động của Bác; 
                truyền thống đấu tranh kiên cường, bất khuất trong kháng chiến và những thành tựu trong công cuộc đổi mới của Đảng bộ, 
                nhân dân tỉnh Trà Vinh; quá trình xây dựng và chiến đấu bảo vệ ngôi Đền.</p>
           
        </div>

        
    </section>
    <label class="lb1"> Hình ảnh ghi chép quá trình cuộc đời của Bác</label>
   
    
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
        
        <div class="in2">
            <p>Nơi đây còn là nơi để bạn tìm hiểu về cuộc đời, sự nghiệp chính trị của Chủ tịch Hồ Chí Minh. 
                Tại đây lưu giữ các hiện vật, hình ảnh, tài liệu khắc họa lại chi tiết hành trình Bác Hồ đã trải qua, 
                từ khi là một đứa trẻ đến lúc trưởng thành, quá trình bôn ba 11 năm khắp thế giới đến khi về Việt Nam lãnh đạo cách mạng.
                Ngôi đền tượng trưng cho sự kính trọng của người dân Trà Vinh dành cho Bác, trãi qua quá trình đấu tranh quyết liệt, có sự 
                hi sinh để bảo vệ cho Ngôi đền này, vết tích của giặc chống phá, những chiến công, những cái tên anh dũng hi sinh bảo vệ ngôi 
                đền thờ cũng được ghi chép lại được lưu giữ tại nhà trưng bày, để mọi người nhìn thấy tên những người đã hi sinh bảo vệ quê hương,
                bảo vệ Đền thờ Bác.
            </p>
        </div>

       
        <div class="square-gallery">
            <img src="hinhanh/img/16.jpg" alt="Hình ảnh lớn">
            <img src="hinhanh/img/18.jpg" alt="Hình ảnh nhỏ 1">
            <img src="hinhanh/img/27.jpg" alt="Hình ảnh nhỏ 2">
        </div>
        
    </section>
    <label class="lb2" style="margin-left:754px;"> Hình ảnh, tài liệu quá trình xây dựng và bảo vệ Đền thờ</label>

    <section class="photo-section">
        <div class="photo-row">
            <img src="hinhanh/img/23.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/24.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/26.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/19.jpg" alt="Ảnh 1" class="photo">
        </div>
        <div class="photo-row">
            <img src="hinhanh/img/30.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/11.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/32.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/32.jpg" alt="Ảnh 1" class="photo">
        </div>
        
        <label class="lb3">  Hình ảnh các hiện vật lịch sử tại Đền thờ</label>

        <div class="info3">
            <p>Hình ảnh trên các mẩu tích bom đạn, trong quá trình xây dựng Đền thờ bị địch chống phá, nhưng người dân nơi đây không nản lòng
                ngày đêm xây dựng không ngừng nghỉ, địch bắn phá ở đâu mọi người xây lại chỗ đó, chiến đấu ác liệt, có những người hi sinh, còn những
                người ở lại tiếp tục chiến đấu, bảo vệ đền thờ. Kèm theo đó hình ảnh những người có công xây dựng và bảo vệ Đền thờ, những người con mảnh đất   Trà Vinh
                yêu nước, tinh thần chiến đầu không sợ chết.
            </p>
        </div>
    </section>


    <section class="photo-section">
        <div class="photo-row1">
            <img src="hinhanh/img/31.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/28.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/20.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/40.jpg" alt="Ảnh 1" class="photo">
        </div>
        <div class="photo-row1">
            <img src="hinhanh/img/36.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/50.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/34.jpg" alt="Ảnh 1" class="photo">
            <img src="hinhanh/img/40.jpg" alt="Ảnh 1" class="photo">
        </div>
        
        <label class="lb3"> Hình ảnh mô hình thu nhỏ các hiện vật lịch sử tại Đền thờ </label>

        <div class="info3">
            <p>Hình ảnh trên các mẩu tích bom đạn, trong quá trình xây dựng Đền thờ bị địch chống phá, nhưng người dân nơi đây không nản lòng
                ngày đêm xây dựng không ngừng nghỉ, địch bắn phá ở đâu mọi người xây lại chỗ đó, chiến đấu ác liệt, có những người hi sinh, còn những
                người ở lại tiếp tục chiến đấu, bảo vệ đền thờ. Kèm theo đó hình ảnh những người có công xây dựng và bảo vệ Đền thờ, những người con mảnh đất   Trà Vinh
                yêu nước, tinh thần chiến đầu không sợ chết.
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
