<?php
require_once 'connection.php';
if(!isset($_GET['id'])){
    header("location:index.php");
}
if(isset($_POST["submit"])){
//    echo 'submit goes here..';
if((isset($_POST['name'])) && isset(($_POST['gender'])) && isset(($_POST['mobile']))) {
$name = $_POST['name'];
//echo $name;
$gender = $_POST['gender'];
//echo $email;
$mobile = $_POST['mobile'];
//echo $password;
$sql=mysqli_query($connection, "insert into records(user_name,user_gender,user_mobile)
                                values('$name','$gender','$mobile')")
            or die("Error".mysqli_error($connection));
echo("\n");
$stmt = $connection->prepare($sql);
//echo '<pre>';
//echo var_dump($stmt);
//echo '</pre>';
//$stmt->execute(array(
//$name = $_POST['name'],
//$email = $_POST['email'],
//$password = $_POST['password']));

if($sql){
    echo "<script>alert('data added successfully');window.location='index.php';</script>";
}
}
}
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
      body{ font: 14px sans-serif; }
      .wrapper{ width: 350px; padding: 20px; }
  </style>
</head>
<body>
    <form method="post">
            Name : <input type="text" name="name"/>
            Gender : <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            Mobile no :<input type="number" name="mobile"/>
            <input type="submit" name="submit"/>
           </form>
</body>
</html>

