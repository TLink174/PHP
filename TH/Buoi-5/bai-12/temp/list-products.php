<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <header>
            <h1><a href="index.php">COMPUTER ABC</a></h1>
        </header>

        <div id="main-wrapper">
            <?php echo $html ?>
        </div>

        <footer>
        </footer>
    </div>

</body>

<style>
    body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: #ecf0f1;
}

a:link,
a:visited {
	color: #2980b9;
	text-decoration: none;
}

a:hover,
a:active {
	text-decoration: underline;
	color: #e74c3c;
}

#container {
	width: 400px;
	margin: 20px auto;
	padding: 10px;
	border-radius: 5px;
	border: 1px solid #7f8c8d;
	background: #fff;
}

#product-img {
	float: left;
	width: 70%;
}

#rating-info {
	float: left;
	width: 30%;
	padding: 0;
	list-style-type: none;
}

.clear-fx {
	clear: both;
}

.product-info {
	border-bottom: 1px solid #bdc3c7;
	margin-bottom: 10px;
}

#submit-button {
	padding: 5px 20px;
	margin-top: 10px;
}

h1 {
	background: #3498db;
	padding: 10px 0;
}

h1 a:link,
h1 a:visited {
	color: #fff;
}
</style>
</html>