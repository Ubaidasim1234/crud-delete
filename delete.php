<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include "index.php";
$id=$_GET['id']??"";

$query="Delete form student where id='$id' ";
$run=mysqli_query($con,$query);
if($run){
    echo "<script>
    alert('data deleted Successfully');
    window.location.herf='index.php'; 
    </script>";
}
else{
    echo "<script>
    alert('data deleted faild');
    window.location.herf='index.php'; 
    </script>";
}


?>

    
</body>
</html>