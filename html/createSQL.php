<?php
$conn = mysqli_connect('localhost','root','7410asd891!','opentutorials',3307);
$sql = "SELECT * FROM topic";
$res = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($res)) {
  //<li><a href=\"index.php?id=19\">MySQL</a></li>
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}
$article = array(
  'title'=>'Welcome',
  'description'=>'Hello WEB'
);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>

  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <form action="process_createSQL.php" method="post">
      <p><input type="text" name="title" placeholder="title"> </p>
      <p><textarea name="description" rows="8" cols="80" placeholder="description"></textarea></p>
      <p><input type="submit"> </p>

    </form>
  </body>
</html>
