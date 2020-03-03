<?php

$conn=mysqli_connect("localhost","root","7410asd891!","opentutorials",3307);
$sql = "
  INSRT INTO topic
    (title,description,created)
    VALUE('MySQL',
    'MySQL is Good',
    NOW()
    )
";
$res = mysqli_query($conn,$sql);

echo $sql;
if($res===false){
  echo mysqli_error($conn);
}

?>
hi!
