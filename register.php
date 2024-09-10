<?php
include_once "db.php";



if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['cpwd'])){
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
        $cpwd = $_POST['cpwd'];

        $SQL = "SELECT * FROM `users` WHERE `user_email` = '$email'";
        $Result = mysqli_query($conn, $SQL);
        $resultCheck = mysqli_num_rows($Result);

        if(password_verify($cpwd, $pwd)){
            if($resultCheck == 0){
                $sql = "INSERT INTO `users`(`user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_gender`) 
                        VALUES ('$name','','$email','','$pwd','')";
                $result = mysqli_query($conn, $sql);
            }else{
                 echo 'userErr';
            } 
        }else{
            echo 'pwdErr';
        }
        
    }else{
        echo 'email_err';
    }
}else{
    echo 'error';
}
?>