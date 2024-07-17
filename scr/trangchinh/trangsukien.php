<?php
include("htrangchu.php"); // Include header
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sự kiện</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffdf43;
        margin: 0;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .content-wrapper {
        width: 80%;
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        margin-left: 154px;
    }

    .image-container {
        width: 50%;
        margin-right: 20px;
        margin-top: 21px;
    }

    .image-container img {
        width: 100%;
        border-radius: 8px;
    }

    .events-container {
        width: 50%;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
        color: black;
    }

    .event {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 8px;
    }

    .event-title {
        font-size: 1.2em;
        margin: 0;
    }

    .event-dates {
        color: #666;
        margin-bottom: 10px;
    }

    .show-more {
        color: #007bff;
        cursor: pointer;
        display: inline-block;
    }

    .show-less {
        color: #007bff;
        cursor: pointer;
        display: none;
    }

    .ds {
        padding: 15px;
        color: red;
        font-weight: 600;
        font-size: 20px;
    }
    </style>
</head>

<body>

    <div class="content-wrapper">

        <div class="image-container">
            <div class="w3-content w3-section" style="max-width:500px">
                <img class="mySlides" src="hinhanh/h1.jpg" style="width:100%">
                <img class="mySlides" src="hinhanh/MH.jpg" style="width:100%">
                <img class="mySlides" src="hinhanh/ND.jpg" style="width:100%">
                <img class="mySlides" src="hinhanh/NHA.jpg" style="width:100%">
                <img class="mySlides" src="hinhanh/XE.jpg" style="width:100%">
            </div>
            <div style="padding-left: 175px; color: blue; font-size: 20px;">
                <a href="/khoaluan/dangki_thamquan.php" style="text-decoration: none;">Đăng Kí Tham Quan</a>

                


            </div>

           
            <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
            </script>
        </div>

        <div class="events-container">
            <h1 class="ds">Sự kiện</h1>

            <?php
            include("../ketnoi.php");

            // Query to fetch events from the database
            $sql = "SELECT * FROM sukien";
            $result = $conn->query($sql);

            // Hiển thị các sự kiện nếu có
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="event">';
                    echo '<h2 class="event-title">' . $row["tensukien"] . '</h2>';
                    echo '<p class="event-dates">' . date_format(date_create($row["ngaybatdau"]), 'd/m/Y') . ' - ' . date_format(date_create($row["ngayketthuc"]), 'd/m/Y') . '</p>';
                    echo '<p class="event-content" id="event' . $row["id"] . '">' . substr($row["noidung"], 0, 100) . '...</p>';
                    echo '<span class="show-more" onclick="toggleContent(' . $row["id"] . ')">Xem thêm</span>';
                    echo '<span class="show-less" onclick="toggleContent(' . $row["id"] . ')" style="display:none">Thu gọn</span>';
                    echo '<div style="display: none;" id="full-content' . $row["id"] . '">' . $row["noidung"] . '</div>';
                    echo '</div>';
                }
            } else {
                echo "Không có sự kiện nào.";
            }
            $conn->close();
            ?>
        </div>

    </div>

    <script>
    function toggleContent(eventId) {
        var content = document.getElementById('event' + eventId);
        var fullContent = document.getElementById('full-content' + eventId);
        var showMoreBtn = document.querySelector('#event' + eventId + ' .show-more');
        var showLessBtn = document.querySelector('#event' + eventId + ' .show-less');

        if (content.style.display === "none") {
            content.style.display = "block";
            fullContent.style.display = "none";
            showMoreBtn.style.display = "none";
            showLessBtn.style.display = "inline-block";
        } else {
            content.style.display = "none";
            fullContent.style.display = "block";
            showMoreBtn.style.display = "inline-block";
            showLessBtn.style.display = "none";
        }
    }
    </script>

    <?php
    include("fortrangchu.php"); // Include footer
    ?>

    <style>
    .nav.navbar-nav.navbar-right>li:nth-child(4) a {
        color: #ffb239;
        /* Màu bạn muốn hiển thị cho liên kết hiện tại */
        font-weight: bold;
        /* In đậm để nhấn mạnh */
    }
    </style>