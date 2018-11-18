<?php

	$name=$_POST['t1'];
	$email=$_POST['t2'];
	$password=$_POST['p1'];
	$dbhost="localhost";
	$dbuser="satyam";
	$dbpass="applemango";
	$dbname="satyam";

	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	

    if(mysqli_connect_errno())
    {
        die( "Database connection failed: " . "(" ."Error no. " . mysqli_connect_errno() . ")" . mysqli_connect_error() );
    }
    else
    {
        $sql ="INSERT INTO users VALUES ('$name','$email','$password');";  
      
        $result=mysqli_query($con,$sql);  
          if($result){  
            //echo "Account Successfully Created";
            echo "<script>
                       alert('Account Successfully Created.Proceeding to login page.');
                        window.location.href='login.php';
                  </script>";  
          } 
          else 
          {  
            echo "Failure!";  
          }  
      //echo "Connection created";
       
    }




?>