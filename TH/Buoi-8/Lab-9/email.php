<?php

use PHPMailer\PHPMailer\PHPMailer;

    require "../PHPMailer-master/src/PHPMailer.php";
    require "../PHPMailer-master/src/SMTP.php";
    require "../PHPMailer-master/src/Exception.php";
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->CharSet = "utf8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = 'true';
        $nguoigui = 'tienlinhk74@gmail.com';
        $matkhau = 'knnexloqcvtscycp';
        $tennuoigui = 'Tiến Link';
        $mail->Username = $nguoigui;
        $mail->Password = $matkhau;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($nguoigui, $tennuoigui);
        $to = "baopng.21it@vku.udn.vn";
        $to_name = "Phạm Ngọc Gia Bảo";
        $mail->addAddress($to, $to_name);
        $mail->isHTML(true);
        $mail->Subject = 'Hello Bảo nha, gửi thư từ php';
        $noidung = "<b>Chào bạn</b><br>Bạn có khoẻ không???";
        $mail->Body = $noidung;
        //$mail->addAttachment(""); //thêm tệp tin
        $mail->smtpConnect(array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
                "allow_self_signed"=>true
            )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
    }
    catch (Exception $e) {
        echo 'Mail gửi đi không thành công. Lỗi:', $mail->ErrorInfo;
    }
