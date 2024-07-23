<?php

    require 'dbcon.php';
    session_start();

    echo "After submission of form, user will redirect on this page";
    echo "<br>";

     // Saving Data into Database
    if(isset($_POST['save_Record'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $message = $_POST['message'];

        $query = "INSERT INTO contact_info(name, email, country, message) 
        VALUES('$name','$email','$country','$message') ";

        $query_run = mysqli_query($conn, $query);

        if($query_run){
            $_SESSION['message'] = "Record added successfully...!";
            header("Location: contact.php");
            exit(0);
        }else{
            $_SESSION['message'] = "Something went wrong.";
            header("Location: index.php");
            exit(0);
        }
    }
?>