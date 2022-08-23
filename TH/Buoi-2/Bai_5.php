<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
  <?php
    // Pt bac nhat
    function giaipt_bac_1($a, $b) {
      if($a == 0) {
        if($b == 0) {
          $nghiem = "Phương trình vô số nghiệm";
        }
        if($b != 0) {
          $nghiem = "Phương trình vô nghiệm";
        } 
      }
      else {
          $nghiem = "x=". round(-($b/$a),2);
        }
        return $nghiem;
      
    }
    // Pt bac 2
    function giaipt_bac_2($a, $b, $c) { 
      if ($a==0) {
        $nghiem = giaipt_bac_1($b, $c);  
      }
      if($a != 0) {
        $delta = pow($b,2)-(4*$a*$c);
     
        if($delta == 0) {
          $nghiem = "Phương trình có nghiệm kép x1=x2=".-($b/2*$a);
        }
        if($delta > 0) 
        {
    
          $x1 = ((-$b+sqrt($delta))/2*$a);
          $x2 = ((-$b-sqrt($delta))/2*$a);
          $nghiem = "Phương trình có 2 nghiệm phân biệt x1 = $x1, x2 = $x2";
        } else {
          $nghiem = "Phương trình vô nghiệm";
        }
    }
    return $nghiem;
  }
  if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
    $nghiem = giaipt_bac_2($a = $_POST['a'], $b = $_POST['b'], $c = $_POST['c']);
  }
    ?>
    <form action="Bai_5.php" method="post">
      <table width="806" border="1">
        <tr>
          <td colspan="4" bgcolor="#336699">
            <strong>Giải phương trình bậc 2</strong>
          </td>
        </tr>
        <tr>
          <td width="83">Phương trình</td>
          <td width="236">
            <input name="a" type="text" value="<?php echo $a; ?>">
            X^2 +
          </td>
          <td width="218">
            <label for="textfield3"></label>
            <input type="text" name="b" id="textfield3" value="<?php echo $b; ?>">
            X+
          </td>
          <td width="241">
            <label for="textfield"></label>
            <input type="text" name="c" id="textfield" value="<?php echo $c; ?>">
            =0
          </td>
        </tr>
        <tr>
          <td colspan="4">
            Nghiệm
            <label for="textfield2"></label>
            <input
              name="textfield"
              type="text"
              id="textfield2"
              width="400"
              value="<?php if (isset($nghiem)) {
                echo $nghiem;
              } ?>"
            />
          </td>
        </tr>

        <tr>
          <td colspan="4" align="center" valign="middle">
            <input type="submit" name="chao" id="chao" value="Xuất" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>