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
$update_link = '';
$delete_link = '';
if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
  $sql = "SELECT * FROM topic where id = {$filtered_id}";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res);
  $article['title']=htmlspecialchars($row['title']);
  $article['description']=htmlspecialchars($row['description']);
  $update_link = '<a href="updateSQL.php?id='.$_GET['id'].'">update</a>';
   /* "" -> {} & \"  , '' -> . & " , HTML -> "<?=  ?>" */
  $delete_link = '<form action="process_deleteSQL.php" method = "post" onsubmit="if(!confirm(\'sure?\')){return false};">
    <input type = "hidden" name="id" value="'.$_GET['id'].'">
    <input type="submit" value="delete">
  </form>';
}
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
     <a href="createSQL.php">create</a>
     <?=$update_link?>
     <?=$delete_link?>
      <h2><?=$article['title']?></h2>
      <?=$article['description']?>
  </body>
</html>
