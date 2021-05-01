<?php
    if(isset($_POST['Send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $letter = $_POST['letter'];

        $con = mysqli_connect('localhost', 'root', '', 'product_info');
        if(!$con){
            die("Could not connect to the server");
        }

        $sql = "INSERT INTO `contact_info` (`name`, `email`, `phone`, `letter`)
        VALUES ('$name', '$email', '$phone', '$letter')";

        $query = mysqli_query($con, $sql);

        if($query){
            echo "Your message was sent!";
        }else{
            echo "Sorry, a problem has accured:(";
        }

        mysqli_close($con);
    }
?>
