<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
 <head>
  <title>guest@b2l2l</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" title="Default" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
 </head>
 <body>
 
  <?php
	$cmd = $_GET["o"];
		if ($cmd == "") 
						{
			echo "<font color='white' >#NEVER TRY TO HACK A HACKER </br>enter '<font color='red'>mywork' </font>to see my work 
			</br> enter '<font color='pink'>bilal'</font> to read more about me </font>
			";
											}
		elseif($cmd == "mywork") 
						{ header("location:/work.php");
							exit();
											}
		
		else
						{ header("location:/work.php");
							exit();
											}
?>
  </br></br></br></br></br></br></br></br></br></br></br>
<form method="GET">
<font color='white' >root@b2l2l:</font> <input type="text" name="o"><br>
</form>












  <div id="credit">coded by <a href="http://b2l2l.com">Bilal barzinji</a>.<a href="http://github.com/b2l2l/hackerportfolio">Source code on github</a>.</div>
 </body
</html>

