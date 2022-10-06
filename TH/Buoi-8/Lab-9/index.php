<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <label for="" class="form-label">Email</label><br>
        <input type="text" class="form-control" name="email" placeholder="Email"><br>
        <label for="" class="form-label">Subject</label><br>
        <input type="text" class="form-control" name="tieude" placeholder="ten"><br>
        <label for="" class="form-label">Nội dung</label><br>
        <textarea name="content" id="editor" class="form-control"></textarea><br>
        <label for="" class="form-label">File đính kèm</label><br>
        <input type="file" class="form-control" name="file"><br>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>

</body>

</html>