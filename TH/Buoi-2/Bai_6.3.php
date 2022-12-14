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
      input {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <?php
      $mang = array();
      $mang_duy_nhat = array();
      $so_lan = array();
      if(isset($_POST['output'])) {
        $mang = explode(',', $_POST['output']);
        $mang_duy_nhat = array_unique($mang);
        $so_lan = array_count_values($mang);
      }
      $chuoi = "";
      foreach ($so_lan as $key => $value) {
        $chuoi = $chuoi . $key . "." . $value . " ";
      }
      function mang_duy_nhat($mang) {
        if(isset($mang)) {
          echo implode(",", $mang);
        }
      }
    ?>
    <form action="Bai_6.3.php" method="POST">
      <table border="0">
        <thead>
          <tr>
            <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mảng:</td>
            <td>
              <input
                type="text"
                name="output"
                value="<?php echo $_POST['output']; ?>"
              />
            </td>
          </tr>
          <tr>
            <td>Số lần xuất hiện:</td>
            <td>
              <input
                type="text"
                name="so_lan_xuat_hien"
                value="<?php echo $chuoi; ?>"
                disabled="disabled"
              />
            </td>
          </tr>
          <tr>
            <td>Mảng duy nhất:</td>
            <td>
              <input
                type="text"
                name="mang_duy_nhat"
                value="<?php mang_duy_nhat($mang_duy_nhat); ?>"
                disabled="disabled"
              />
            </td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" value="Thực hiện" /></td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
