<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo htmlspecialchars(file_get_contents("Data/".$_GET['id'])); // 모든 데이터를 단순 html로 변경
    echo strip_tags(file_get_contents("Data/".$_GET['id'])); // 모든 태그를 제거
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./Data');
  $i = 0;

  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        $title = htmlspecialchars($list[$i]);
        echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
 ?>
