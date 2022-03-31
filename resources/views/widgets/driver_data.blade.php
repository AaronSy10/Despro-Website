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


<table id="driverdata" class="table table-hover  table-bordered">
    <thead>
        <tr class="text-center">
            <th scope="col">Driver</th>
            <th scope="col">Location</th>
            <th scope="col">Date<br>(yyyy-mm-dd)</th>
            <th scope="col">Time<br>(hh:mm:ss)</th>
            <th scope="col">Drowsiness Status</th>
        </tr>
    </thead>

    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr class="text-center">
            <td scope="row"><?php echo $rows['Driver']; ?></td>
            <td><?php echo $rows['Location']; ?></td>
            <td><?php echo $rows['Date']; ?></td>
            <td><?php echo $rows['Time']; ?></td>
            <td class="drowsiness"><?php echo $rows['Drowsiness Status']; ?></td>
        </tr> 
    <?php
            }
            ?>
    </table>

