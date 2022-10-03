<?php

include '../config.php';
include '../class/class.db.theloai.php';

if(isset($_POST['submit'])) {
    $db_theloai = new db_theloai();
    $ten_theloai = (isset($_POST['ten_theloai'])) ? $_POST['ten_theloai'] : "";
    $thu_tu = (isset($_POST['thu_tu'])) ? $_POST['thu_tu'] : 0;
    $an_hien = (isset($_POST['an_hien'])) ? $_POST['an_hien'] : "";

    $result = $db_theloai->them_theloai($ten_theloai, $an_hien, $thu_tu, $an_hien);
    if($result) {
        echo '<script>alert("Thêm thành công"); window.location="../View/theloai.php"</script>';
    } else {
        echo '<script>alert("Thêm thành không công"); window.location="../View/theloai.php"</script>';
    }

}

?>