<?php
if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['upload'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

    $upload_dir = 'uploads/';

    if (in_array(strtolower($file_ext), $allowed_ext)) {
        $file_new_name = uniqid('', true) . '.' . $file_ext;
        $file_destination = $upload_dir . $file_new_name;

        if (move_uploaded_file($file_tmp, $file_destination)) {
            
            if (isset($_GET['CKEditorFuncNum'])) {
                $func_num = (int)$_GET['CKEditorFuncNum'];
                $url = '/khoaluan/uploads/' . $file_new_name;     //Sửa đường dẫn này lại theo bên thư mục lap của m chứ khoaluan
                $message = 'File uploaded successfully';
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($func_num, '$url', '$message');</script>";
            }
        } else {
            echo 'Failed to move uploaded file.';
        }
    } else {
        echo 'Invalid file type. Allowed types: jpg, jpeg, png, gif';
    }
}
?>
