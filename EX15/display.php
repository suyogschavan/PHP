<?php 

include ("connection.php");
error_reporting(0);
$display_query = "SELECT * FROM STUDENTS";
$data = mysqli_query($conn, $display_query);
$result = mysqli_fetch_assoc($data);
$total = mysqli_num_rows($data);
if($total != 0){
?>
    <table>
        <tr>
            <th> Roll No</th>
            <th> Name</th>
            <th> Email</th>
        </tr>
        <?php
    while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td> | ".$result['roll_no']."</td>
        <td> | ".$result['name']."</td>
        <td> | " .$result['email']." </td>
        </tr><br>";
    }
}
// echo $result['roll_no']." ".$result['name']." ".$result['email'];

?>
</table>