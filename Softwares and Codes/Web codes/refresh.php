<?php
/* The purpose of this page is to update chart.js.
 * It selects the latest data and makes it available for 'current.html' which updates the values on the page.
 */
$q = intval($_GET['q']);	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
					//select from database 
					$sql = "SELECT RT
						   FROM para
						   WHERE id=$q";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
						   echo $row["RT"];
						   
						}
					}
$conn->close();
?>


