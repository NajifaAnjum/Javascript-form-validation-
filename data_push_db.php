<?php
    $user_name=$_POST['username'];
    $user_email=$_POST['email'];
    $user_password2=$_POST['password2'];

    $db=mysqli_connect("localhost","root","","practise") or die(mysqli_error());

    $insert_query="INSERT INTO user_validation(Name,Email,User_Password)
    VALUES ('$user_name','$user_email','$user_password2')";

    mysqli_query($db,$insert_query) or die(mysqli_error());
    header("Location: http://localhost/batch2/4.javascript/form validation js/show_db.php");
    mysqli_close($db);
?>