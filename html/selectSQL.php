<?php
$conn = mysqli_connect('localhost','root','7410asd891!','opentutorials',3307);
//1row
$sql = "SELECT * FROM topic LIMIT 1000";
$res = mysqli_query($conn,$sql);
//singleRow
$row= mysqli_fetch_array($res);
print_r($row);
echo '<h1>single row</h1>';
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];

echo '<h1>multi row</h1>';
$res = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res)){
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];

}
//all row
 ?>
