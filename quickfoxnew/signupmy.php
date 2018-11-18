<?php

   // include("redirecttime.php")
   include("redirect.php");
   include("validation_errors.php");

   $errors=array();
   $message="";

   if(isset($_POST["submit"]))
   {
    $first=trim($_POST["first_name"]);
    $last=trim($_POST["last_name"]);
    $email=trim($_POST["email"]);
    $username=trim($_POST["username"]);
    $password=trim($_POST["password"]);
    $re_password=trim($_POST["re_password"]);
    
    $fields=array("first_name","last_name","email","username","password");
    foreach($fields as $x)
    {  $value=trim($_POST[$x]);
      if(!check_blank($value))
      { $errors[$x]=ucfirst($x) . " can't be blank";}
    }
    if($password!=$re_password)
    {
      array_push($errors,"Passwords do not match");
    }
    
    

    if(empty($errors))
    {
      $dbhost="localhost";
      $dbname="pikachu";
      $dbpswd="applemango";
      $dbuser="root";
      $connection=mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);

    if(mysqli_connect_errno())
    {
        die( "Database connection failed: " . "(" ."Error no. " . mysqli_connect_errno() . ")" . mysqli_connect_error() );
    }
    else
    {
        $sql ="INSERT INTO quickfox (Username,Password,firstname,lastname) VALUES ('$username','$password','$first','$last');";  
      
        $result=mysqli_query($connection,$sql);  
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

       //  if (($username=="abhi" || $username=="shibalik" )&& $password=="password")
       //   {redirect_to("form.php");}
        
       //  else
       //  {
       //      $first=$_POST["first_name"];
       //      $last=$_POST["last_name"];
       //      $email=$_POST["email"];
       //      $username=$_POST["username"];
       //      $message="Incorrect Info";
       // }   
       //used for form  
    }
    
  } 
   else
   {
      $username="";
      $first="";
      $last="";
      $email="";
        $message=" ";
        echo "<br>";
   }


?>

<script type="text/javascript">
  
  function foo()
  {   var a=document.getElementByid('ax');
      a.innerHTML+="pikachu";
      // if(document.getElementByid('15').value==document.getElementByid('16').value)
      // { document.getElementByid('17').innerHTML= &#10004 ;  }
  }

</script>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text|Merriweather" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

	/********************************************************************/
/****************************************************************************/
		body,html{
			height: 100%;}
		body {
			background-image: url("10.jpg");
			background-size: 1920px 1080px;
			background-repeat: no-repeat;
		}
		.container {

			width: 100%;
			padding: 15px;
			display: -webkit-box;
  			display: -webkit-flex;
  			display: -moz-box;
  			display: -ms-flexbox;
  			flex-wrap: wrap;
  			display: flex;
  			align-items: center;
			justify-content: center;
			vertical-align: center;
			}
		.login{
			top: 100px;
			background:rgba(255,255,255,0.7);
			position:relative;
			overflow: hidden;
			width: 670px;
			min-height: 300px;
			border-radius: 10px;
		}
		.head{
			background-color: #333;
			font-size: 30px;
			font-weight: 900;
			color: white;
			text-align: center;
			width: 100%;
			padding-top: 40px;
			vertical-align: center;
			opacity: 1;
			padding-bottom: 15px;
			font-family: 'Merriweather', serif;
		}
		.top-nav{
			padding: 16px 14px;
			background-color: #333;
			color: white;
			top: 0;
			left: 0;
			position: fixed;
			width: 100%;
		}
		li {
			display: inline-block;
			padding-left: 10px;
			padding-right: 10px;
		}
		a{
			text-decoration: none;
			color: white;
		}
    a:hover{
      color: #ee3333;
    }
    .le
    {
      float: left;
    }
    .ce{
      position: fixed;
      left: 48%
    }
	
	</style>
	<title>Login</title>
</head>
<body>
	<div class="top-nav">
		<ul>
			<li class="le">Logo</li>
			<li class="ce"><a href="index.php"><i class="fa fa-home" style="font-size: 30px;"></i></a></li>
		</ul>

	</div>
	<div class="container">
		<div class="login">
			<div class="head">
				<span class="log">Sign Up</span>
			</div>
			 <form class="login100-form validate-form" action="signup.php" method="post">
    
     <div class="wrap-input100 validate-input m-b-26" data-validate="First name is required">
            <span class="label-input100">First name</span>
            <input class="input100" type="text" name="first_name" placeholder="Enter First name" value="<?php echo htmlspecialchars($first)?>" >
            <span class="focus-input100"></span>
          </div>

    <!-- First Name : <input type="varchar" name="first_name" id="ab" value="<?php echo htmlspecialchars($first)?>"><br> -->

    <div class="wrap-input100 validate-input m-b-26" data-validate="Last name is required">
            <span class="label-input100">Last name</span>
            <input class="input100" type="text" name="last_name" placeholder="Enter last name" value="<?php echo htmlspecialchars($last)?>" >
            <span class="focus-input100"></span>
          </div>
   <!--  Last Name  : <input type="varchar" name="last_name" id="ac" value="<?php echo htmlspecialchars($last)?>"><br> -->

   <div class="wrap-input100 validate-input m-b-26" data-validate="Email id is required">
            <span class="label-input100">Email id</span>
            <input class="input100" type="text" name="email" placeholder="Enter last name" value="<?php echo htmlspecialchars($email)?>" >
            <span class="focus-input100"></span>
          </div>
    <!-- Email id   : <input type="varchar" name="email" id="ad" value="<?php echo htmlspecialchars($email)?>"><br> -->

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Enter username" value="<?php echo htmlspecialchars($username)?>" minlength="6">
            <span class="focus-input100"></span>
          </div>

    <!-- Create a Username: <input type="text" name="username" id="ae" minlength="6" value="<?php echo htmlspecialchars($username)?>"> <br> -->

    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password" minlength="8" maxlength="16">
            <span class="focus-input100"></span>
          </div>

    <!-- Enter a Password: <input type="password" name="password" value="" id="af" minlength="8" maxlength="16" > <br> -->

    <div class="wrap-input100 validate-input m-b-18" data-validate = "Re Password is required">
            <span class="label-input100">Confirm password</span>
            <input class="input100" type="password" name="re_password" placeholder="Re-enter password">
            <span class="focus-input100"></span>
    </div>
  <div  style="color: red;font-size: 14px;"><?php echo $message ?>
    <?php echo form_errors($errors)?></div><br>
    <!-- <div id="ax">Re-enter Password: <input type="password" name="re_password" value="" id="ag" onchange="foo()">
     </div> --> <p><br></p><p><br></p><p><br></p><p><br></p>


     <div class="container-login100-form-btn">
      <br>
            <input type="submit" name="submit" value="Sign Up" class="login100-form-btn"> &nbsp &nbsp &nbsp
            <input type="button" value="Log In" class="login100-form-btn" onclick="window.location.href='loginmy.php'">  
            
          </div>

      <!-- &nbsp &nbsp &nbsp &nbsp<input type="submit" name="submit" value="Sign Up" > &nbsp
     <input type = "button" value="Go to login page" onclick="window.location.href='login.php'">
     <input type="reset" name=""> -->
    </form>
			
		</div>
	</div>


</body>
</html>