<?php

session_start();

if( isset($_SESSION['captcha']) and $_POST['my-captcha'] == $_SESSION['captcha'] ){

    unset($_SESSION['captcha']);

    echo "Correct captcha!";
}

else{
    echo "Invalid captcha! Sorry.";
    
header('Location:index.php');
}


?>



<!--<form method = "post" action="form.php" class="form-group">

  
    <p><input type = "submit" value = "Try Again" name="submit1" class="btn"></p>
    

</form> -->

