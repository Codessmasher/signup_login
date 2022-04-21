<?php
// if(isset($_POST['login'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>SignUp</title>
    </head>
    
    <body>
    
        <div class="container">
    
            <div class="title">
                <h2>Access Your Account</h2>
            </div>
            <form action="signup.php" method="POST">
                <div class="input">
                    <div class="email">
                        <label for="Email"><span>Email:</span></label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="pass">
                        <label for="name"><span>Password:</span></label>
                        <input type="text" name="pass" required>
                    </div>
                    <div class="cpass">
                        <label for="CPassword"><span>Confirm Password:</span></label>
                        <input type="text" name="cpass" required>
                    </div>
                    <div  class="btn">
                        <input type="submit" value="login"  class="btn2 btn" name="login">
                    </div>
    
                </div>
            </form>
    
    
    
    
    
    
        </div>
    
    
    
    
    
    </body>
    
    </html>