<?php
rename('Data/'.$_POST['old_title'], 'data/'.$_POST['title']);

file_put_contents('Data/'.$_POST['title'], $_POST['description']);
header('Location: /index.php?id='.$_POST['title']);
?>
