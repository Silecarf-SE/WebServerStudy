<?php
var_dump($_POST);
$conn = mysqli_connect('localhost','root','7410asd891!','opentutorials',3307);
settype($_POST['id'],"integer");
$filtered = array(
  'id'=>mysqli_real_escape_string($conn,$_POST['id'])
);
$sql = "DELETE FROM topic
  WHERE
      id = {$filtered['id']}
";
$res=mysqli_query($conn,$sql);
if($res===false){
  echo "query error";
  echo(mysqli_error($conn));
} else{
  echo 'delete success <a href="index.php">back</a>';
}
 ?>
