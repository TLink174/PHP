<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("../connect.php");

    if (isset($_GET['idTL'])) {
        $sql = "SELECT * FROM theloai WHERE idTL=" . $_GET['idTL'];
    }

    $results = mysqli_query($conn, $sql);
    $a = mysqli_fetch_array($results);
    ?>
    <form action="" method="post" enctype="multipart/form-data" name="form1">
        <table align="left" width="400">
            <tr>
                <td align="right">
                    Ten The Loai
                </td>
                <td>
                    <input type="text" name="TenTL" value="<?php echo $a['TenTL']; ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    Thu Tu
                </td>
                <td>
                    <input type="text" name="ThuTu" value="<?php echo $a['ThuTu']; ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    An Hien
                </td>
                <td>
                    <select name="AnHien">
                        <option value="0" <?php if ($a['AnHien'] == 0) echo "selected"; ?>>An</option>
                        <option value="1" <?php if ($a['AnHien'] == 1) echo "selected"; ?>>Hien</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">icon</td>
                <td> <img src="../img/<?php echo $a['icon'] ?>" width="40" height="40" /></td>

            </tr>
            <tr>
                <td align="right">&nbsp;</td>
                <td> <input type="file" name="image" id="image" /> </td>
            </tr>
            <tr>
                <td align="right">
                    <input type="hidden" name="idTL" value="<?php echo $_GET['idTL']; ?>" />
                    <input type="submit" name="Sua" value="Sua" />
                </td>
                <td>
                    <input type="reset" name="Huy" value="Huy" />
                </td>
            </tr>
        </table>
    </form>
    <?php
    include("../connect.php");


    // upload hinh anh
    if (isset($_FILES["image"]["name"]))
        $icon = $_FILES["image"]["name"];
    if (isset($_FILES['image']['tmp_name'])) {
        $anhminhhoa_tmp = $_FILES['image']['tmp_name'];
        if (isset($_GET['idTL'])) {
            $sql = "SELECT 'icon' FROM theloai WHERE idTL=" . $_GET['idTL'];
        }
        $results = mysqli_query($conn, $sql);
        $a = mysqli_fetch_array($results);
        if ($a['icon'] != $icon) {
            move_uploaded_file($anhminhhoa_tmp, "../img/" . $icon);
            unlink('admin/img/n.png');
        }
    }



    //lay gia tri cho tham so
    $tam = "";
    if (isset($_POST["TenTL"]))
        $theloai = $_POST['TenTL'];
    if (isset($_POST["ThuTu"]))
        $thutu = $_POST['ThuTu'];
    if (isset($_POST["AnHien"]))
        $an = $_POST['AnHien'];
    if (isset($_POST['Sua'])) {
        if (isset($_GET["idTL"])) {
            $key = $_GET["idTL"];
        }

        if ($icon == "") {
            $sql = "UPDATE theloai SET TenTL='$theloai',ThuTu='$thutu',AnHien='$an' WHERE idTL='$key'";
        } else {
            $sql = "UPDATE theloai SET TenTL='$theloai',ThuTu='$thutu',AnHien='$an',icon='$icon' WHERE idTL ='$key'";
        }

        if (mysqli_query($conn, $sql)) {
            header("Location: ../theloai.php");
        }
    }
    ?>

</body>

</html>
