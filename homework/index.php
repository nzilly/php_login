<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="homework";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      echo "connected succesfull";
    }
catch(PDOException $error)
    {
    echo "Connection failed:" .$error->getMessage();
    }
     if($_SERVER['REQUEST_METHOD']=='POST'){
     	$firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $email=$_POST['email'];
        $stmt = $conn->prepare("INSERT INTO student(id,firstname,lastname,email)
     VALUES(:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    echo "connected succesfull";
     }
     else{
     	echo "fail";
     }
?>
<html>
<body>

<form action="index.php" method="POST">
Firstname: <input type="text" name="fname"><br>
Lastname: <input type="text" name="lname"><br>
E-mail: <input type="text" name="email"><br>
<button type="submit" name="submit">submit</button> 
</form>

</body>
</html>