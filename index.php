<?php

session_start();

$captcha = rand(111111,999999); //create random numbers
$_SESSION['captcha'] = $captcha; // save rand numbers inside captcha session

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>captcha</title>
    <style>
        .form-group{
            max-width: 400px;
            background-color:aliceblue;
            margin: 40px auto;
            padding: 30px;
            border-radius: 10px;
        }
        
.btn{
    padding: 15px 45px;
    background-color: rgb(80, 42, 141);
    color: white;
    border: none;
    border-radius: 30px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 16px;
    cursor: pointer;
    display: inline-block;
}
    </style>
 
</head>
<body>
    
<form method = "post" action="form.php" class="form-group">

<p><b>Captcha:</b></p>
<p><img src="image.php?captcha_text=<?php echo $_SESSION['captcha']; ?>"></p>
<p><input type = "text" value = "" name="my-captcha"></p>
<p><input type = "submit" value = "submit" name="submit" class="btn"></p>


</form>

</body>
</html>

