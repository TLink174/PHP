<?php
    // lấy data
    $tiengui = filter_input(INPUT_POST, 'tiengui',
        FILTER_VALIDATE_FLOAT);
    $laisuat = filter_input(INPUT_POST, 'laisuat',
        FILTER_VALIDATE_FLOAT);
    $namgui = filter_input(INPUT_POST, 'namgui',
        FILTER_VALIDATE_INT);

    // điều kiện
    if ($tiengui === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $tiengui <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; 
    // validate interest rate
    } else if ( $laisuat === FALSE )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $laisuat <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; 
    // validate namgui
    } else if ( $namgui === FALSE ) {
        $error_message = 'Years must be a valid whole number.';
    } else if ( $namgui <= 0 ) {
        $error_message = 'Years must be greater than zero.';
    } else if ( $namgui > 30 ) {
        $error_message = 'Years must be less than 31.';
    // lỗi
    } else {
        $error_message = ''; 
    }

    // chuyển trang lỗi
    if ($error_message != '') {
        include('index.php');
        exit(); }

    // tính toán
    $tiennhan = $tiengui;
    for ($i = 1; $i <= $namgui; $i++) {
        $tiennhan += $tiennhan * $laisuat * .01; 
    }

    // chuyển đổi tiền tệ

    $res = file_get_contents("https://v6.exchangerate-api.com/v6/88e287ce9dcfd4e937b197af/latest/USD");
    $data = json_decode($res, true);
    $conversion_rates = $data["conversion_rates"];
    $vnd = $conversion_rates["VND"];

    $tiengui_f = '$'.number_format($tiengui, 2);
    $yearly_rate_f = $laisuat.'%';
    $tiennhan_f = '$'.number_format($tiennhan, 2);

    $tiengui_vnd = number_format($tiengui*$vnd, 0) ."VNĐ";
    $tiennhan_vnd = number_format($tiennhan*$vnd, 0) ."VNĐ";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>

        <label>tiengui Amount:</label>
        <span class="usd"><?php echo $tiengui_f; ?></span>
        <span class="vnd" hidden><?php echo ($tiengui_vnd) ?></span>
        <br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Number of namgui:</label>
        <span><?php echo $namgui; ?></span><br>

        <label>Future Value:</label>
        <span class="usd"><?php echo $tiennhan_f; ?></span>
        <span class="vnd" hidden><?php echo ($tiennhan_vnd) ?></span>
        <br>

        <div class="d-md-flex justify-content-md-end">
            <button id="btn-usd" type="button" class="btn btn-primary">USD</button>
            <button id="btn-vnd" type="button" class="btn btn-primary" hidden>VND</button>
        </div>
    </main>
</body>
<script>
    $(document).on('click','#btn-usd',function(){
        $(this).hide();
        $('#usd').hide();
        let btn = $('#btn-vnd');
        $(document).find('.usd').hide();
        $(document).find('.vnd').removeAttr('hidden');
        $(document).find('.vnd').show();
        btn.removeAttr('hidden');
        btn.show();
    });
    $(document).on('click','#btn-vnd',function(){
        $(this).hide();
        $('#vnd').hide();
        let btn = $('#btn-usd');
        $(document).find('.vnd').hide();
        $(document).find('.usd').show();
        btn.show();   
    }); 
</script>
</html>
