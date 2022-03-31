<?php
$servername="localhost"; //creds
$username="root";
$password="t93NyKLG]YJ0/VsY";
$dbname="truck";

//creating connection
$conn = new mysqli($servername,$username,$password,$dbname);
//checking connection
if($conn->connect_error){
    die("Connectionfailed: ". $conn->connect_error);
}

$query = "SELECT * FROM data";
$result = mysqli_query($conn,$query);

if($result->num_rows>0){ //output data
    while ($row = $result->fetch_assoc()){
        echo "<div style='border:1'>";
        echo "Driver: ".$row['Driver']. "| Location:".$row['Location']. "| Date:".$row['Date']. "| Time:".$row['Time']. "| Droswiness Status:".$row['Drowsiness Status']."<br>";
        echo "</div>";
    }
}
else{
    echo "0 results";
}
$conn->close();
?>
