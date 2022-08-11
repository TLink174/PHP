<?php 
    //set default value of variables for initial page load
    if (!isset($tiengui)) { $tiengui = ''; } 
    if (!isset($laisuat)) { $laisuat = ''; } 
    if (!isset($namgui)) { $namgui = ''; } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>tiengui Amount:</label>
            <input type="text" name="tiengui"
                   value="<?php echo htmlspecialchars($tiengui); ?>">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="laisuat"
                   value="<?php echo htmlspecialchars($laisuat); ?>">
            <br>

            <label>Number of namgui:</label>
            <input type="text" name="namgui"
                   value="<?php echo htmlspecialchars($namgui); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>