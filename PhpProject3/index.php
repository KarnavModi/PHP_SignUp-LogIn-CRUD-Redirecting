<?php
require_once 'connection.php';
if(!isset($_GET['uid'])){
    header("location:login.php");
}
$sql = mysqli_query($connection,"select * from records where is_deleted=0") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_array($sql)){
 $i=1;
    echo "<tr>";
    //echo "<td>{$row['user_id']}</td>";
    echo "<td>$i</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='edit.php?id={$row['user_id']}'>Edit</a> | <a href='delete.php?deleteid={$row['user_id']}'>Delete</a></td>"; 
    echo "</tr>";
}
//<?php echo{$row['user_id']}->id
echo "</table>";
echo"<a href='insert.php'>Add Record</a>";
?>