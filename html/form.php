<?php

$i = file_put_contents('Data/'.$_POST['title'],$_POST['description']);
echo $_POST['title'].'<br />';
echo $_POST['description'].'<br />';
header('Location: /index.php?id='.$_POST['title'])


 ?>
