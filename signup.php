
 <?php


if(isset($_POST['signup'])) { 
 

 $name = $_POST['name'];  
 $password = $_POST['password'];  
 
    $email = $_POST['email'];
   
       if(empty($name)||empty($password)|| empty($email)||!preg_match("/^[a-zA-Z ]*$/",$name)||!filter_var($email, FILTER_VALIDATE_EMAIL)) {

   

echo"<script type='text/javascript'>
  alert('please intert all value completely and correctly');

 </script>";

    
    }



}
?>




<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>.error {color: #FF0000;}
.body{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.menubar {
  overflow: hidden;
  background-color: #3300FF;
}

.menubar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  text-transform: bold;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.menubar a:hover {
  background-color: #3300FF;
  color: black;
}

.menubar a.active {
  background-color: #FFFFFF;
  color: blue;
}

.button {
  background-color: #3300FF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body>
<div class="bgimage">


  
   
  <?php
$Id=$name =$lname=$Address=$Nid=$zip=$phone=$city=$email=$ammount=$gender=$Id="";
$IdErr=$fnameErr =$lnameErr=$AddressErr=$NidErr=$zipErr=$phoneErr=$cityErr=$emailErr=$ammountErr=$genderErr=$IdErr="";




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>

<div class="menubar">
  
    <a href="login.php">login</a>

</div>

<div style="padding-left:16px">
   <table>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
     	 <form name="form1" method="post" action="signup.php">
     	 	<td>
     	 		<tr>
     	 			     

     	 		</tr>
     	 	</td>
   <td>   
  <tr>
   
      <h3>Registration from</h3></tr>
    </td>
  
      
        <td>
       <tr>    name*  <input type="text" name="name">
           <span class="error">* <?php echo $fnameErr;?></span>  </tr>
        </td>
    

            
        <td><tr>email id*</tr></td>
        <td>
      <tr>    <input type="text" name="email" placeholder="enter email id here">
           <span class="error">* <?php echo $emailErr;?></span></tr>
        </td>

   <td><tr>Password*</tr></td>
        <td>
      <tr>    <input type="text" name="password" placeholder="enter pass  here">
           <span class="error">* <?php echo $emailErr;?></span></tr>
        </td>
   

  </table>
  <button class="button" name="signup" >CONTINUE</button>
</form>
</table>
</div>



</div>


</body>
</html>




