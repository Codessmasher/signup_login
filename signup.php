<?php
if(isset($_POST['submit'])){
$conn = mysqli_connect('localhost','root','','signup');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if($pass==$cpass){
$ins = "INSERT INTO `signup` (`name`, `email`, `pass`, `cpass`) VALUES ('$name','$email','$pass','$cpass')";
$res = mysqli_query($conn,$ins);
echo "Inserted Successfully";
}
else{
    echo "<script> confirm('PASSWORD IS NOT SAME'); window.open('signup.html')</script>";
}





}

                            // login system starts here

if(isset($_POST['login'])){
    $conn = mysqli_connect('localhost','root','','signup');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    
    $slct = "SELECT *FROM `signup` WHERE `name` ='$name' AND `pass`='$pass' AND `cpass`='$cpass' AND `email`='$email'";
    $res = mysqli_query($conn,$slct);
    $row = mysqli_fetch_assoc($res);

    if (mysqli_num_rows($res) == 1) 
    {
        if ($row['name'] === $name && $row['pass'] === $pass && $row['cpass'] === $cpass) 
        {

            echo "Logged in!";
            
        }
    
    }   
    else
    {
       echo "Invalid Username And Password";
    }
 
    
    }


?>