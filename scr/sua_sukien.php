<?php
include("header.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; 

$sql = "SELECT * FROM sukien WHERE id = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin bài đăng" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<head>
    <script >

CKEDITOR.replace('editor1', {
    entities: false,  // Tắt chuyển đổi ký tự đặc biệt thành các ký tự HTML entity
    basicEntities: false,  // Tắt chuyển đổi cơ bản các ký tự thành entity
    entities_latin: false,  // Không chuyển đổi các ký tự Latin thành entity
    entities_greek: false,  // Không chuyển đổi các ký tự Greek thành entity
    // contentsCss: '/path/to/your/stylesheet.css' // Đường dẫn tới CSS của bạn để định nghĩa lại font
});
</script>

</head>

<form enctype="multipart/form-data" action="thuchien_sua_sukien.php" name="suasukien" method="post">
<link rel="stylesheet" href="lg.css">

    <div>
       
        <div class="table-center">
            <div class="btn-center">
                <div class="top-h4">
                    <h4 class="top-h4"> Sự kiện mới </h4>
                </div>
            </div>

            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <label>ID:</label>
                    <input type="text" name="id" readonly value="<?php echo $row["id"]; ?>"/>
                </div>
                <div class="txt-gv-lb">
                    <label>Tiêu đề:</label>
                    <input type="text" name="tensukien" id="tensukien" value="<?php echo $row["tensukien"]; ?>"/>
                </div>

                <div class="txt-gv-lb">
                    <label>File:</label>
                    <input type="file" name="file" accept=".pdf, .doc, .docx">
                  <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                </div>

                
               
                
            </div>

            <div class="txt-gv-bot">
                <div class="txt-gv-lb">
                <label>ngày bắt đầu:</label>
                <input type="date" name="ngaybatdau" value="<?php echo $row["ngaybatdau"]; ?>"/>
                  
                </div>
                <div class="txt-gv-lb">
                    <label>ngày kết thúc:</label>
                    <input type="date" name="ngayketthuc" value="<?php echo $row["ngayketthuc"]; ?>"/>
                </div>
                

                <div class="txt-gv-lb">
                    <label>Người đăng:</label>
                    <select name="idnhanvien">
                            <?php
                $sql = "SELECT idnhanvien, hoten FROM taikhoan";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm: " . mysqli_error($conn));
                while ($row_tt = mysqli_fetch_assoc($kq)) {
                    $idnhanvien = $row_tt['idnhanvien'];
                    $hoten = $row_tt['hoten'];
                    $selected = ($idnhanvien == $row["idnhanvien"]) ? "selected" : "";
                    echo "<option value=\"$idnhanvien\" $selected>$hoten</option>";
                    
                    }
                ?>
                        </select>
                </div>


            </div>
               
            <!-- -------------------- -->
            <div class="txt-gv-top">
              
                <div class="txt-gv-lb">
                    <label>Nội dung:</label>
                       <textarea name="noidung" id="editor1"><?php echo htmlspecialchars($row['noidung'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>


                <div class="txt-gv-lb">
                    <label>Ngày đăng:</label>
                    <input type="date" name="ngaydang" value="<?php echo $row["ngaydang"]; ?>"/>
                    
                </div>
            </div>


            <!-- -------------------- -->
            
            <div class="txt-btn">
                <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
                <a style="text-decoration: none;" class="txt-btn-huy" type="reset" href="QLSK.php">Hủy bỏ</a>
            </div>
        </div>
    </div>
</form>

<?php
include("footer.php");

?>
<script src="editor/ckeditor.js"></script>
<script>
CKEDITOR.replace('editor1', {
    filebrowserUploadUrl: 'upload.php?type=Files',
    filebrowserImageUploadUrl: 'upload.php?type=Images',
    filebrowserBrowseUrl: 'editor/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl: 'editor/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
    height: 200,
    width: 500,
    toolbar: [
        ['NewPage', '-', 'Undo', 'Redo', 'PageBreak'],
        ['Cut', '-', 'Copy', 'Paste', 'PasteFromWord'],
        ['Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
        ['Link', 'Unlink', 'Image', 'Flash', 'Table', 'Smiley', 'SpecialChar'],
        '/',
        ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'],
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyFull', 'JustifyBlock'],
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'],
        ['Maximize', 'ckeditor_wiris_formulaEditor']
    ]
});
</script>