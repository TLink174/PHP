<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        font-family: Tahoma;
      }
      table {
        width: 400px;
        margin: 100px auto;
      }
      table th {
        background: #66ccff;
        padding: 10px;
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    <?php
      if(isset($_POST['so_phan_tu']))
      $n = $_POST['so_phan_tu'];
      else {$n = 0;}
      $mang = array($n);
        for($i=0;$i<$n;$i++) {
          $mang[$i] = mt_rand(0,20);
        }
      function output($mang) {
        echo implode(",",$mang);
      }
      function tmin($mang) {
        if(isset($mang[0])) {
          $min = $mang[0];
          $n = count($mang);
          for($i = 1; $i < $n; $i++) {
            if($mang[$i]<$min) {
              $min = $mang[$i];
            }
          }
          echo $min;
        }
      }
      function tmax($mang) {
        if(isset($mang[0])) {
          $max = $mang[0];
          $n = count($mang);
          for($i = 1; $i < $n; $i++) {
            if($mang[$i]>$max) {
              $max = $mang[$i];
            }
          }
          echo $max;
        }
      }
      function tong($mang) {
        $s = 0;
        $n = count($mang);
        for($i = 0; $i < $n; $i++) {
          $s += $mang[$i];
        }
        echo $s;
      }
      
    ?>
    <form action="Bai_6.2.php" method="POST">
      <table>
        <thead>
          <tr>
            <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nhập số phần tử:</td>
            <td><input type="text" name="so_phan_tu" width="100%" value="<?php echo $n; ?>"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Phát sinh và tính toán" /></td>
          </tr>
          <tr>
            <td>Mảng:</td>
            <td>
              <input
                type="text"
                name="mang_so"
                disabled="disabled"
                value="<?php output($mang); ?>"
              />
            </td>
          </tr>
          <tr>
            <td>GTLN ( MAX ) trong mảng:</td>
            <td>
              <input
                type="text"
                name="gtln"
                disabled="disabled"
                value="<?php tmax($mang); ?>"
              />
            </td>
          </tr>
          <tr>
            <td>GTNN ( MIN ) trong mảng:</td>
            <td>
              <input
                type="text"
                name="ttnn"
                disabled="disabled"
                value="<?php tmin($mang); ?>"
              />
            </td>
          </tr>
          <tr>
            <td>Tổng mảng:</td>
            <td>
              <input
                type="text"
                name="tong_mang"
                disabled="disabled"
                value="<?php tong($mang); ?>"
              />
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
