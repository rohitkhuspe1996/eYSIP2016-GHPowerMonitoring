<?php
$q = intval($_GET['q']);	


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);	
} 
 $sql =  "UPDATE power SET button_2 = $q ";
 
 if (mysqli_query($conn, $sql)) 
 { 
  echo "successful";
 }
 else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 $sql =  "UPDATE scheduled SET Button_change = 1 WHERE id = 2";
 
  if (mysqli_query($conn, $sql)) 
  {
	   //echo "$b_stat";
  }
 else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

header("Location:select.php");
$conn->close();

?>