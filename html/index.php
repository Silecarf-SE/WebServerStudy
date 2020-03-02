<!DOCTYPE html>
<html>
	<head> <!--information  for this document -->
		<meta charset="utf-8" />
		<title>HTML code STUDY </title>

	</head>
	<body> <!--contents for page a - anchor = 링크 -->
		<header><h1><a href="http://192.168.56.102/" target="_blank">JavaScript 이란 무엇인가</a></h1></header>
		<nav>
			<strong>Strong Tag</strong>
			<!-- Juseok-->
			<ol> <!--ordered list-->
				<li><a href="page_html.html">wow! JavaScript?</a></li>
				<li><a href="page_vc.html">wow! variables and constants</a></li>
				<li><a href="page_op.html">wow! operator</a></li>
			</ol>
			<ul> <!--unordered list-->
				<li>lina</li>
				<li>youbin</li>
				<li>steve</li>
			</ul>
			<p sytle="margin:200px;">Hypertext Markup Language (HTML) is the standard markup language for
			<strong>creating <u>web</u> pages</strong> and web applications.</p>
			<p sytle="margin:10px;">Web	browsers receive HTML documents from a web server or from local storage and
			render them into multimedia web pages. HTML describes the structure of a web page semantically
			and originally included cues for the appearance of the document.</p>
			<h3>Coding</h3> <!-- this is title!!! 의미에 맞게 정확하게 사용해야 한다 -->
			<!-- html은 어떤 운영체제에서 간에 똑같이 접속한다. -->
			<span style="font-size:36px;">Coding</span> <!-- this is not title!!! -->
			<br><img src="NoTitleImg.jpeg" width="30%"><br>
			<!-- 태그가 이름만으로 부족할때 속성을 부과한다 -->
			<?php
				echo date('Y-m-d H:i:s');
				?>
				<br />
				<form action="index.php">
				<input type="text" name="name" value="" >
				<input type="submit">

				</form>
				<?php
				// data type = boolean, integer, float, string, array, object, callable, iterable, resource, NULL
				print(1+1);
				//JS variable = var ? use = ${?}
				$name = 'YOUYOU!';
				print($name);
				echo $_GET['name'];
			 ?>
			 <br />
			 <?php
			 	$str = "Lorem ipsum dolor sit amet, consection ullamco laboris nisi ut aliquip ex ea
				commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
				echo $str;
				echo strlen($str);
				echo nl2br($str);
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
