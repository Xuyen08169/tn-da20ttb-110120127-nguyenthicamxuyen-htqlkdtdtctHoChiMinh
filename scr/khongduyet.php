<?php include ("header.php"); 
include("ketnoi.php");
?>
<style>
    /* Thêm CSS tùy chỉnh cho toastr nếu cần */
    .toast-top-right {
        top: 12px;
        right: 12px;
    }
</style>

<!-- trang này chứa thông tin của nhân viên đăng nhập vào tài khoản của chính bản thân -->
<link rel="stylesheet" href="text.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary" style="font-size: 25px; padding-left: 270px; padding-top:15px;">
                    DANH SÁCH ĐĂNG KÍ THAM QUAN ĐỀN THỜ
                </h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>Tên</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tên đoàn</th>
                            <th>Ngày tham quan</th>
                            <th>Số lượng</th>
                            <th>Trạng thái</th>
                            <th>Tuỳ chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include("ketnoi.php");
                    $sql = "SELECT * FROM dkthamquan";
                    $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin thiết bị " . mysqli_error($conn));

                    if (mysqli_num_rows($kq) > 0) {
                        while ($row = mysqli_fetch_array($kq)) {
                            $usern = $row["idtq"];
                            $idtq = $row["idtq"];
                            $trangthai = $row["trangthai"];

                            echo "<tr>";
                            echo "<td>" . $row["hoten"] . "</td>";
                            echo "<td>" . $row["sdt"] . "</td>";
                            echo "<td>" . $row["diachi"] . "</td>";
                            echo "<td>" . $row["tendoan"] . "</td>";
                            echo "<td>" . date('d/m/Y', strtotime($row["ngaythamquan"])) . "</td>";
                            echo "<td>" . $row["soluong"] . "</td>";
                            echo "<td>" . $trangthai . "</td>";
                            
                            echo "<td class='nut' style='font-size: 20px;'>
                                    <a href='#' class='view-details' data-id='$usern'>
                                        <button style='border: none;background: #faebd700; color: #26355D'>
                                            <ion-icon name='eye-outline'></ion-icon>
                                        </button>
                                    </a>";

                            if ($trangthai !== "đã duyệt" && $trangthai !== "không duyệt") {
                                echo "<a href='#' class='approve' data-user='$usern' data-idtq='$idtq'>
                                        <button class='approve-btn' style='border: none;background: #faebd700; color: #26355D'>
                                          <ion-icon name='checkmark-circle-outline'></ion-icon>
                                        </button>
                                    </a>";
                                echo "<a href='#' class='disapprove' data-user='$usern' data-idtq='$idtq'>
                                        <button class='disapprove-btn' style='border: none;background: #faebd700; color: #26355D'>
                                          <ion-icon name='close-circle-outline'></ion-icon>
                                        </button>
                                    </a>";
                            }

                            echo "<a href='xoa_ds_thamquan.php?user=$usern'>
                                    <button style='border: none;background: #faebd700; color: #26355D'>
                                        <ion-icon name='trash'></ion-icon>
                                    </button>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Không có dữ liệu để hiển thị.";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="eventDetailModal" tabindex="-1" role="dialog" aria-labelledby="eventDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventDetailModalLabel">Chi tiết danh sách tham quan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Nội dung modal sẽ được điền bởi JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<?php include ("footer.php"); ?>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "Không có dữ liệu",
            "info": "Đang hiển thị _START_ đến _END_ của _TOTAL_ mục",
            "infoEmpty": "Đang hiển thị 0 đến 0 của 0 mục",
            "infoFiltered": "(đã lọc từ tổng số _MAX_ mục)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Hiển thị _MENU_ mục",
            "loadingRecords": "Đang tải...",
            "processing": "Đang xử lý...",
            "search": "Tìm kiếm:",
            "zeroRecords": "Không tìm thấy kết quả phù hợp",
            "paginate": {
                "first": "Đầu",
                "last": "Cuối",
                "next": "Tiếp",
                "previous": "Trước"
            },
            "aria": {
                "sortAscending": ": sắp xếp tăng dần",
                "sortDescending": ": sắp xếp giảm dần"
            },
            "searchPlaceholder": "Nhập từ khóa..."
        },
        "pageLength": 10,
    });

    $('.view-details').on('click', function(e) {
        e.preventDefault();
        var eventId = $(this).data('id');
        $.ajax({
            url: 'HTthongtin_danhsach.php',
            type: 'GET',
            data: { id: eventId },
            success: function(response) {
                $('#eventDetailModal .modal-body').html(response);
                $('#eventDetailModal').modal('show');
            },
            error: function(xhr, status, error) {
                toastr.error('Đã xảy ra lỗi khi lấy dữ liệu.');
            }
        });
    });

    $('.approve').on('click', function(e) {
        e.preventDefault();
        var userId = $(this).data('user');
        var idtq = $(this).data('idtq');
        $.ajax({
            url: 'xacnhan.php',
            type: 'GET',
            data: { user: userId, id: idtq },
            success: function(response) {
                toastr.success('Cập nhật thành công. Email xác nhận đã được gửi.');
                // Ẩn nút duyệt và không duyệt
                $(e.target).closest('tr').find('.approve-btn, .disapprove-btn').hide();
            },
            error: function(xhr, status, error) {
                toastr.error('Đã xảy ra lỗi khi duyệt.');
            }
        });
    });

    $('.disapprove').on('click', function(e) {
        e.preventDefault();
        var userId = $(this).data('user');
        var idtq = $(this).data('idtq');
        $.ajax({
            url: 'khongduyet.php',
            type: 'GET',
            data: { user: userId, id: idtq },
            success: function(response) {
                toastr.success('Cập nhật thành công. Email xác nhận đã được gửi.');
                // Ẩn nút duyệt và không duyệt
                $(e.target).closest('tr').find('.approve-btn, .disapprove-btn').hide();
            },
            error: function(xhr, status, error) {
                toastr.error('Đã xảy ra lỗi khi duyệt.');
            }
        });
    });
});
</script>
