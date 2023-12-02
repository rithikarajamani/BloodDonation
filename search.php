<html>
    <head>
        <style>
        table{
            border-style:solid;
            border-width:2px;
            border-color:red;
            font-family: normal;
  background-color: white;
  border:4px solid red;
  width:40%;
  height:160px;
  padding:center;
        }
        </style>
        </head>
        <body style="background-color:white;"><center>
            
            <?php
                 include("connection.php");
                 $Bloodgroup=$_POST["Bloodgroup"];
                 $sql="SELECT * FROM t1 WHERE Bloodgroup='$Bloodgroup'";
                 echo "BloodDonar Database";
                 echo "<table border='5'>
                 <br><br><br><br>
                 <tr>
                 <th>Name</th>
                 <th>Age</th>
                 <th>BloodGroup</th>
                 <th>ContactNumber</th>
                 <th>City</th>
                 
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['Name'] . "</td>";
        echo "<td>" . $rows['Age'] . "</td>";
        echo "<td>" . $rows['BloodGroup'] . "</td>";
        echo "<td>" . $rows['ContactNumber'] . "</td>";
        echo "<td>" . $rows['City'] . "</td>";
        
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?>

</center>
        </body>
</html>