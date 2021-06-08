<?php
require_once 'connection.php';
if(!isset($_GET['id'])){
    header("location:index.php");
}
$editid = $_GET['id'];
//select data from Table
$editq = mysqli_query($connection,"select * from records where user_id='{$editid}';")or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);
 
if(isset($_POST['submit'])){
    echo "<script>alert('data changed successfully.');window.location='index.php';</script>";
}   

?>
<html>
        <body>
           <form method="post">
               Name : <input type="text" value="<?php echo $editdata['user_name']; ?>" name="name"/>
               </br>
               Gender : <select name="gender">
                <option value="Male" <?php if($editdata['user_gender']=="Male"){echo "selected";}?>>Male</option>
                <option value="Female" <?php if($editdata['user_gender']=="Female"){echo "selected";}?>>Female</option>
            </select>
               </br>
               Mobile : <input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="mobile"/>
               </br>
                            
             <input type="submit" name="submit"/>
            
            </form>
         </body>
       </html>