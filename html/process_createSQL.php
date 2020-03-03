<?php
var_dump($_POST);
$conn = mysqli_connect('localhost','root','7410asd891!','opentutorials',3307);

$filtered = array(
  'title'=>mysqli_real_escape_string($conn,$_POST['title']),
  'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);
$sql = "INSERT INTO topic(title,description,created)
        VALUES(
        '{$filtered['title']}',
        '{$filtered['description']}',
        NOW()
        )
";
$res=mysqli_query($conn,$sql);
if($res===false){
  echo "query error";
  error_log(mysqli_error($conn));
} else{
  echo 'query success <a href="index.php">back</a>';
}
 ?>
