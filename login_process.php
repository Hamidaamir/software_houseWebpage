<?php
session_start();
include('dbcon.php');


if(isset($_POST["submit"])){
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT  * FROM `admin` WHERE email='$email' AND password='$password'";
        $query_run = $conn->prepare($query);
        $query_run->execute();
        $result = $query_run->fetch(PDO::FETCH_ASSOC);
        if($result){
            $id = $result['id'];
            $name = $result['name'];
            $email = $result['email'];
            $password = $result['password'];
            $date = $result['date'];
            $city = $result['city'];
            
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
           $query_execute = $query_run->execute();
           if($query_execute)
           {
               $_SESSION['message']="Register Successfully";
               header('location: admin_home.php');
               exit(0);
           }
          
        }else {
            echo "incorrect";
    }
    }
}

