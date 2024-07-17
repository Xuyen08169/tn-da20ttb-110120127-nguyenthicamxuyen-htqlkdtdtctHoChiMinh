<?php
include("header.php");
?>

<form enctype="multipart/form-data" action="xuly_them_lich.php" name="themlich" method="post">
<link rel="stylesheet" href="lg.css">

    <div>
        <!-- <div class="top-center">
            <p class="top-h1 ">Hệ Thống Quản Lý Di Tích</p>
        </div> -->
        <div class="table-center">
            <div class="btn-center">
                <div class="top-h4">
                    <h4 class="top-h4" style="margin-left:162px"> Lịch Trực Mới</h4>
                </div>
            </div>

            <div class="txt-gv-top">
                <div class="txt-gv-lb" style="display:none;">
                    <label>ID:</label>
                    <input type="text" name="idtruc" readonly></input>
                </div>
              
                
                
            </div>

           
            <!-- -------------------- -->
           

            <div class="txt-gv-top">
              
                <div class="txt-gv-lb">
                    <label>Người trực:</label>
                    <select name="idnhanvien">
                            <?php
                $sql = "SELECT idnhanvien, hoten FROM taikhoan WHERE quyen = 1";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm : " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $idnhanvien = $row['idnhanvien'];
                    $hoten = $row['hoten'];
                    echo "<option value=\"$idnhanvien\">$hoten</option>";
                    }
                ?>
                        </select>

                </div>
                
                
            </div>
            <!-- ---------------------------------- -->
            <div class="txt-gv-top">
              
            <div class="txt-gv-lb">
                    <label>Ngày trực:</label>
                    <input type="date" id="ngaytruc" name="ngaytruc" required>
                </div>


                <script>
                document.addEventListener('DOMContentLoaded', (event) => {
                    // Lấy phần tử input
                    const ngaydangInput = document.getElementById('ngaytruc');

                    // Lấy ngày hiện tại
                    const today = new Date().toISOString().split('T')[0];

                    // Đặt thuộc tính min cho input là ngày hiện tại
                    ngaydangInput.setAttribute('min', today);

                    // Thêm sự kiện để kiểm tra khi người dùng thay đổi giá trị của input
                    ngaydangInput.addEventListener('input', (event) => {
                        const selectedDate = event.target.value;
                        if (selectedDate < today) {
                            alert('Ngày đăng không được là ngày quá khứ.');
                            event.target.value = today; // Đặt lại giá trị input là ngày hiện tại
                        }
                    });
                });
                </script>


              <div class="txt-gv-lb">
                    <label> Tên sự kiện:</label>
                    <!-- <input type="text" name="id"> -->
                    <select name="id">
                    <?php
                            $sql = "SELECT id, tensukien FROM sukien";
                            $kq = mysqli_query($conn, $sql) or die("Không thể thêm: " . mysqli_error($conn));
                            echo "<option value=\"\"></option>";
                            while ($row = mysqli_fetch_assoc($kq)) {
                                $id = $row['id'];
                                $tensukien = $row['tensukien'];
                               
                                echo "<option value=\"$id\">$tensukien</option>";

                                }
                            ?>
                    </select>
                <!-- </input> -->
                        

                </div>
                
              
              
          </div>
          
            
            <div class="txt-btn">
                <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
                <a style="text-decoration: none;" class="txt-btn-huy" type="reset" href="QLLT.php">Hủy bỏ</a>
            </div>
        </div>
    </div>
</form>
<?php
include("footer.php");
?>
