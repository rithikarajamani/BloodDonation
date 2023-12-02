<?php
include("connection.php");
$Name=$_POST["Name"];
$Age=$_POST["Age"];
$Bloodgroup=$_POST["Bloodgroup"];
$Contactnumber=$_POST["Contactnumber"];
$City=$_POST["City"];

$sql="INSERT INTO t1(Name,Age,Bloodgroup,Contactnumber,City)VALUES('$Name','$Age','$Bloodgroup','$Contactnumber','$City')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Feedback submitted successfully")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}

/*$sql = "SELECT id,name  FROM t1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

  $sql = "SELECT id,name  FROM t1";
$result = $conn->query($sql);

 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

</tr>";

 

while($row = $result->fetch_assoc())

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

$conn->close();

*/

?>