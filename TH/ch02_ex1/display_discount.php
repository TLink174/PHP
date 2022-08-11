<?php
// lấy data
$product_description =$_POST['product_description'];
$list_price =$_POST['list_price'] ;
$discount_percents =$_POST['discount_percent'] ;

// tính toán


$discount =$list_price*$discount_percents*.01 ;
$discount_price = $list_price - $discount ;

// chuyển đổi giá trị tiền tệ

$res = file_get_contents("https://v6.exchangerate-api.com/v6/88e287ce9dcfd4e937b197af/latest/USD");
$data = json_decode($res, true);
$conversion_rates = $data["conversion_rates"];
$vnd = $conversion_rates["VND"];

$list_price_formatted = "$".number_format($list_price, 2);
$discount_percent_formatted = $discount_percents."%";
$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2);

$list_price_vnd = number_format($list_price*$vnd, 0) ."VNĐ";
$discount_vnd = number_format($discount*$vnd, 0) ."VNĐ";
$discount_price_vnd = number_format($discount_price*$vnd, 0) ."VNĐ";

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br>

        <label>List Price:</label>
        <span class="usd"><?php echo($list_price_formatted); ?></span>
        <span class="vnd" hidden><?php echo ($list_price_vnd); ?></span>
        <br>

        <label>Standard Discount:</label>
        <span><?php echo ($discount_percent_formatted); ?></span><br>

        <label>Discount Amount:</label>
        <span class="usd"><?php echo ($discount_formatted); ?></span>
        <span class="vnd" hidden><?php echo ($discount_vnd); ?></span>
        <br>

        <label>Discount Price:</label>
        <span class="usd"><?php echo ($discount_price_formatted); ?></span>
        <span class="vnd" hidden><?php echo ($discount_price_vnd); ?>
        </span><br>

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