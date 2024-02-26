<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'stayeasy';

    $con = mysqli_connect($hname,$uname,$pass,$db);
    
    if(!$con){//if there is an error in the connection
        die("Can't connect to database".mysqli_connect_error());//die()stops the execution of the script

    }
    function filteration($data){//this function will filter the data // $data will be an array
        foreach($data as $key => $value)
        {//extracts $data's key and value in to variables
            
            $value = trim($value);//removes extra spaces
            $value = stripslashes($value);//removes backword slashes
            $value = strip_tags($value);//it will remove the html tags
            $value = htmlspecialchars($value);//it will convert special character of html in to  their corresponding entities.   
        
            $data[$key] = $value;
        }
         //Example :
            //Input data :<>\\'?admin
            //Filterd data :admin
        return $data;//now $data contains filterd data(filterd by the functions)
    }
    //for Prepared statement

    function selectAll($table)
    {
        $con = $GLOBALS['con'];
        $res = mysqli_query($con,"SELECT * FROM $table");
        return $res;
    }

    function select($sql,$values,$datatypes)
    {
        $con = $GLOBALS['con'];//accessing global variable con which was declared outside this function.
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);// this 3 dots are called splat operator               
            if(mysqli_stmt_execute($stmt))
            {
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else
            {
                mysqli_stmt_close($stmt);
                die("Query can't be executed - Select ");
            }
        }    
        else
        {
            die("Query can't be prepared - Select");
        }
    }

    function update($sql,$values,$datatypes)
    {
        $con = $GLOBALS['con'];//accessing global variable con which was declared outside this function.
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);// this 3 dots are called splat operator               
            if(mysqli_stmt_execute($stmt))
            {
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else
            {
                mysqli_stmt_close($stmt);
                die("Query can't be executed - Update ");
            }
        }    
        else
        {
            die("Query can't be prepared - Update");
        }
    }

    function insert($sql,$values,$datatypes)
    {
        $con = $GLOBALS['con'];//accessing global variable con which was declared outside this function.
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);// this 3 dots are called splat operator               
            if(mysqli_stmt_execute($stmt))
            {
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else
            {
                mysqli_stmt_close($stmt);
                die("Query can't be executed - Insert ");
            }
        }    
        else
        {
            die("Query can't be prepared - Insert");
        }
    }

    function delete($sql,$values,$datatypes)
    {
        $con = $GLOBALS['con'];//accessing global variable con which was declared outside this function.
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);// this 3 dots are called splat operator               
            if(mysqli_stmt_execute($stmt))
            {
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else
            {
                mysqli_stmt_close($stmt);
                die("Query can't be executed - Delete ");
            }
        }    
        else
        {
            die("Query can't be prepared - Delete");
        }
    }
?>
