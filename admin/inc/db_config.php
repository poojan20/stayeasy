<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'stayeasy';

    $con = mysqli_connect($hname,$uname,$pass,$db);
    
    if(!$con){
        die("Can't connect to database".mysqli_connect_error());

    }
    function filteration($data){
        foreach($data as $key=>$value){
            trim();
            stripslashes();
            htmlspecialchars();
            strip_tags();
        }
    }
?>