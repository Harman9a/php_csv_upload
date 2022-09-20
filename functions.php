<?php

    include('config.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $result = mysqli_query($con,"INSERT INTO users (name,email) VALUES('".$name."','".$email."')");
        print_r($result);
    }

    if(isset($_POST['fileSubmit'])){
        $filename = $_FILES["file"]["tmp_name"];

        $file = fopen($filename, "r");

        $i = 0;

        while ($getData = fgetcsv($file)){
            if($i != 0){
                mysqli_query($con,"INSERT INTO users (name,email) VALUES('".$getData[0]."','".$getData[1]."')");
            }
            $i++;
        }
    }
   
    

?>