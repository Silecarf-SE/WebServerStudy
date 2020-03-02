<?php
require('print.php')
 ?>

<!DOCTYPE html>
<html>
	<head> <!--information  for this document -->
		<meta charset="utf-8" />

		<title><?php print_title(); ?> </title>

	</head>
	<body> <!--contents for page a - anchor = 링크 -->
		<header><h1><a href="http://192.168.56.102/" target="_blank">JavaScript 이란 무엇인가</a></h1></header>
		<nav>
			<strong>Strong Tag</strong>
			<!-- Juseok-->
			<ol> <!--ordered list-->
				<li><a href="index.php?id=HTML">wow! JavaScript?</a></li>
				<li><a href="index.php?id=CSS">wow! variables and constants</a></li>
				<li><a href="index.php?id=JavaScript">wow! operator</a></li>
			</ol>
			<a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
      <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>

			<p sytle="margin:200px;">Hypertext Markup Language (HTML) is the standard markup language for
			<strong>creating <u>web</u> pages</strong> and web applications.</p>
			<p sytle="margin:10px;">Web	browsers receive HTML documents from a web server or from local storage and
			render them into multimedia web pages. HTML describes the structure of a web page semantically
			and originally included cues for the appearance of the document.</p>
			<h3>Coding</h3> <!-- this is title!!! 의미에 맞게 정확하게 사용해야 한다 -->
			<?php

			print_description();

			 ?>
			 <br>
			<!-- html은 어떤 운영체제에서 간에 똑같이 접속한다. -->
			<span style="font-size:36px;">Coding</span> <!-- this is not title!!! -->
			<br><img src="NoTitleImg.jpeg" width="30%"><br>
			<!-- 태그가 이름만으로 부족할때 속성을 부과한다 -->
			<?php
				echo date('Y-m-d H:i:s');
				?>
				<br />
				<form action="http://192.168.56.102/form.php" method="post">
				<input type="text" name="title" placeholder="title">
				<textarea name="description" rows="8" cols="80" placeholder="contents"></textarea>
				<input type="submit">

				</form>
				<?php



				// data type = boolean, integer, float, string, array, object, callable, iterable, resource, NULL

				//JS variable = var ? use = ${?}
				//$name;
				//print($name);
			 ?>
			 <h1>Comparison &amp, Boolean data type</h1>
			 <br />
			 <?php
			 	$str = "Lorem ipsum dolor sit amet, consection ullamco laboris nisi ut aliquip ex ea
				commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
				//echo $str;
				//echo strlen($str);
				//echo nl2br($str);
				var_dump(1=='1'); // type(length or value) and echo;
				var_dump(1==='1');
				/*
				if($_GET['title']===""){

				}
				if(isset($_GET['title'])){
				echo $_GET['title'];
				}else{
					echo 'give me title TOT';
				}*/
				echo '<br />';
				$i=3;
				while($i>0){
					echo 'i='.$i.'<br />';
					$i = $i-1;
				}
				print_list();
/*
				$coworkers = array('egoni','rachel','steve');

				array_push($coworkers,'blue','danny');
				array_pop($coworkers); // last out. stack.
				echo '<br />'.count($coworkers).'<br />';
				foreach ($coworkers as $coworker) {
					echo $coworker.'<br />';
				}
*/
				//echo $coworkers[0];




			  ?>

			<table>
				<tr>
					<td>head</td>
					<td>98.1%</td>
				</tr>
				<tr>
					<td>body</td>
					<td>97.9%</td>
				</tr>
				<tr>
					<td>html</td>
					<td>97.9</td>
				</tr>
			</table>
		</nav>



	</body>

</html>
