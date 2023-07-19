<?php

session_start();
include('dbcon.php');

if (empty($_POST["name"])){
    die("Name is required");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}


if(isset($_POST['submit_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $project_name = $_POST['project_name'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $query = "INSERT INTO user_input(name, email, phone, project_name, description, date) 
                VALUES (:name, :email, :phone, :project_name, :description, :date)";
    $query_run = $conn->prepare($query);

    $data = [
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone, 
        ':project_name' => $project_name, 
        ':description' => $description, 
        ':date' => $date,
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute)
    {
        $_SESSION['message']=" Successfull";
        header('location: index.html');
        exit(0);
    }
    else{
        $_SESSION['message']="Not Successfull";
        header('Location: index.html');
        exit(0);
    }

}



























