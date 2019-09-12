
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="index";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(isset($_POST['submit'])){ 

    	$fname= $_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];

        $sql ="INSERT INTO form(firstname,lastname,email)
        VALUES('$fname','$lname','$email');";
        if (mysqli_query($conn,$sql)) {
        	echo "sucessfully"; 
        	exit();
        }else{
        	echo "Error: ". $sql ."<br>" . mysqli_eror($conn);
        	exit();
      }
     }
    

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
	<form action="indexing.php" method="post">
		<table>
			<tr>
				<td>firstname <input type="text" name="fname"></td><br>
			</tr>
			
			<tr>
				<td>lastname <input type="text" name="lname"></td>
			</tr>
			<tr>
				<td>email       <input type="text" name="email"></td>
			</tr>	
		</table>
		<button type="submit" name="submit">submit</button> 
	</form>

</body>
</html>