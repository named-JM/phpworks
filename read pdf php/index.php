<?php
// my comment: when it is set to submit it will go to read file php behavior
if(isset($_POST['submit'])){
    header('Location:read.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read PDF using PHP</title>
</head>
<style>
    .container{
        height: 30rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="hero">Read PDF by PHP</h1>
        </div>
        <br><br><br><br>
        
        <div class="wrapper">
            <img src="cover.jpg" class="image" height="300px" width="200px" alt="">
        </div>


        <br><br><br>
        <div class="wrapper">
            <form action="" method="POST">
                <button type="submit" name="submit" value="submit">READ PDF</button>
            </form>
        </div>
    </div>
</body>
</html>