<?php
include_once "db.php";

if(!empty($_POST['mail']) && !empty($_POST['pwd'])){
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
        $email = $_POST['mail'];
        $sql = "SELECT * FROM `users` WHERE `user_email` = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $resultCheck = mysqli_num_rows($result);
        if(password_verify($_POST['pwd'], $row['user_pwd'])){
            $_SESSION['email'] = $email;
        }else{
            echo "pwdErr";
        }
    }else{
        echo "mailErr";
    }
}else{
    echo "error";
}
    


?>