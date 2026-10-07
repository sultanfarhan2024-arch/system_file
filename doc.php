<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst("javascript related program with php and css stylesheet");?></title>
    <link rel="stylesheet" href="CSS/doc.css">
</head>
<body>
    <nav>
        <h1 class="websiteName">HOXEEN</h1>
        <ul>
            <li><a href="#" class="anka">Home</a></li>
            <li><a href="#" class="anka">Blog</a></li>
            <li><a href="#" class="anka">Gallery</a></li>
            <li><a href="#" class="anka">Contact</a></li>
            <li><a href="#" class="anka">About</a></li>
        </ul>
        <div class="login-bar">
            <a href="#" class="login">Login</a>
        </div>
    </nav>
    <?php
    $num1 = 35;
    $num2 = 56;
    echo $num1 + $num2;
    for($i = 1; $i <= 10; $i++){
        echo "<br> No.".$i;
    }
    
    ?>
    



<script src="javascript/doc.js"></script>
</body>
</html>