<html>
    <head>
        <style>
             h1{
          color:red;
          font-style:unset;
      }
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
  margin-left: auto;
  margin-right: auto;
  
    }
    td,th{
      border: 1px solid black;
    }
    body{
        background-color: white;
    }
        
        </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
        </head>
        <body>
        <center><h1>BLOOD DONATION MANAGEMENT</h1></center>
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/hostel/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/form1.html">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/search.html">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/display.php">ViewDetails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/blooddonation/rare.php">RareBloodGroupDonors</a>
          </li>
         
        </ul>
      </div>
    </nav>
    <br>
    <br>

        
       
            <?php
                 include("connection.php");
                 //$ss=$_POST["ss"]; 
                 $sql="SELECT * FROM t1 where BloodGroup='O-'or BloodGroup='AB-'";
                 echo "                 <table border='1'>
                 <br><br><br><br>
                 <center><h2>RARE BLOODGROUP DONARS</h2></center>
                 <tr>
                 <th>Name</th>
                 <th>Age</th>
                 <th>BloodGroup</th>
                 <th>ContactNumber</th>
                 <th>City</th>
                 
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
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
?></center>
        </body>
</html>
