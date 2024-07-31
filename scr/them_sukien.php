<?php
include("header.php");
?>

<head>
    <script src="editor/ckeditor.js"></script>
</head>

<script>
function callAlert(title, icon, timer, text) {
    Swal.fire({
        position: "center",
        icon: `${icon}`,
        title: `${title}`,
        text: `${text}`,
        showConfirmButton: false,
        timer: `${timer}`,
        animation: false
    });
}

function kiemtra() {
    if (document.forms["themsukien"]["tensukien"].value == "") {
        callAlert('Vui lòng nhập tiêu đề!', 'error', '1500', '');
        document.forms["themsukien"]["tensukien"].setAttribute('required', 'required');
        return false;
    }

   
}

document.addEventListener('DOMContentLoaded', (event) => {
    function validateDate(input) {
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        const dateValue = new Date(input.value);

        if (dateValue <= today) {
            alert(`${input.previousElementSibling.textContent} phải lớn hơn ngày hiện tại.`);
            input.value = "";
        }
    }

    const minDate = new Date();
    minDate.setDate(minDate.getDate() + 1);
    const minDateString = minDate.toISOString().split('T')[0];

    document.getElementById('ngaybatdau').setAttribute('min', minDateString);
    document.getElementById('ngayketthuc').setAttribute('min', minDateString);

    document.getElementById('ngaybatdau').addEventListener('input', function() {
        validateDate(this);
    });

    document.getElementById('ngayketthuc').addEventListener('input', function() {
        validateDate(this);
    });

    const ngaydangInput = document.getElementById('ngaydang');
    const today = new Date().toISOString().split('T')[0];
    ngaydangInput.setAttribute('min', today);

    ngaydangInput.addEventListener('input', (event) => {
        const selectedDate = event.target.value;
        if (selectedDate < today) {
            alert('Ngày đăng không được là ngày quá khứ.');
            event.target.value = today;
        }
    });
    CKEDITOR.replace('editor1', {
    entities: false, // Tắt chuyển đổi ký tự đặc biệt thành các ký tự HTML entity
    basicEntities: false, // Tắt chuyển đổi cơ bản các ký tự thành entity
    entities_latin: false, // Không chuyển đổi các ký tự Latin thành entity
    entities_greek: false, // Không chuyển đổi các ký tự Greek thành entity
    // contentsCss: '/path/to/your/stylesheet.css' // Đường dẫn tới CSS của bạn để định nghĩa lại font

    
    });

});

</script>

<link rel="stylesheet" href="lg.css">

<div>
    <div class="table-center">
        <div class="btn-center">
            <div class="top-h4">
                <h4 class="top-h4" style=" margin-left:100px;"> Sự kiện mới </h4>
            </div>
        </div>

        <form enctype="multipart/form-data" action="xuly_them_sukien.php" name="themsukien" method="post" onsubmit="return kiemtra();">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <label>ID:</label>
                    <input type="text" name="id" readonly></input>
                </div>
                <div class="txt-gv-lb">
                    <label>Tên sự kiện:</label>
                    <input type="text" name="tensukien" id="tensukien"></input>
                </div>
                <div class="txt-gv-lb">
                    <label>File:</label>
                    <input type="file" name="file" accept=".pdf, .doc, .docx">
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                </div>
            </div>

            <div class="txt-gv-bot">
                <div class="txt-gv-lb">
                    <label>Ngày bắt đầu:</label>
                    <input type="date" id="ngaybatdau" name="ngaybatdau">
                </div>
                <div class="txt-gv-lb">
                    <label>Ngày kết thúc:</label>
                    <input type="date" id="ngayketthuc" name="ngayketthuc">
                </div>
            </div>

            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <label> Nội dung:</label>
                    <textarea name="noidung" id="editor1"></textarea>
                </div>

                <div class="txt-gv-lb">
    <label>Người đăng:</label>
    <select name="idnhanvien">
        <?php
        $sql = "SELECT idnhanvien, hoten FROM taikhoan WHERE quyen = 0";
        $kq = mysqli_query($conn, $sql) or die("Không thể thêm: " . mysqli_error($conn));
        while ($row = mysqli_fetch_assoc($kq)) {
            $idnhanvien = $row['idnhanvien'];
            $hoten = $row['hoten'];
            $selected = '';
            if (isset($_SESSION['idnhanvien']) && $_SESSION['idnhanvien'] == $idnhanvien) {
                $selected = 'selected="selected"';
            }
            echo "<option value=\"$idnhanvien\" $selected>$hoten</option>";
        }
        ?>
    </select>
</div>

                <div class="txt-gv-lb">
                    <label> Ngày đăng:</label>
                    <input type="date" name="ngaydang" id="ngaydang"></input>
                </div>
            </div>

            <div class="txt-btn">
                <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
                <a style="text-decoration: none;" class="txt-btn-huy" type="reset" href="QLSK.php">Hủy bỏ</a>
            </div>
        </form>
    </div>
</div>

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