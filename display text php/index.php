<?php
if(isset($_POST['submit'])){
    // succedd
}
if(is_numeric('name')){
    echo "Your name sucks we couldn't submit it.😂😂";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP First App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1 class="hero">
        <?php echo "The user name is " . $_POST['name'] . "😍😘🙌🙌"?>
    </h1>
    <div class="container">
        <div class="holder">
            <form action="index.php" method="POST">
                <div class="wrapper">
                    <input type="text" name="name" id="" placeholder="Enter Username">
                </div>
                <br><br>
                <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <h4 class="footer">Made with <span>❤️JM CAGUCO</span></h4>
</body>
</html>