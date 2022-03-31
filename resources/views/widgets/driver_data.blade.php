<?php
$server="localhost";//server name
$user="root";		//user name
$pass="t93NyKLG]YJ0/VsY";			//user password
$db_name="truck";//database name
$conn= new mysqli($server,$user,$pass,$db_name);
if($conn->connect_error){
	die('Connection Failed'.$conn->connect_error);
}

$query = "SELECT * FROM data";
$result = mysqli_query($conn,$query);
?>


    <table id="data-table">
        <tr id="header">
            <th>Driver</th>
            <th>Location</th>
            <th>Date<br>(yyyy-mm-dd)</th>
            <th>Time<br>(hh:mm:ss)</th>
            <th>Drowsiness Status</th>
        </tr>

        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>
            <tr>
                <td><?php echo $rows['Driver']; ?></td>
                <td><?php echo $rows['Location']; ?></td>
                <td><?php echo $rows['Date']; ?></td>
                <td><?php echo $rows['Time']; ?></td>
                <td><?php echo $rows['Drowsiness Status']; ?></td>
            </tr> 
        <?php
            }
            ?>
    </table>