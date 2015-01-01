<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <head>
 
  <title>guest@b2l2l</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" title="Default" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
 </head>
 <body><a href="./index.php">
 <img src='./logo.png' width='200px'  > </a>
  <?php
	$cmd = $_GET["o"];
		if ($cmd == "") 
						{
			echo " </br><font color='white' >#NEVER TRY TO HACK A HACKER </br>enter '<font color='red'>mywork' </font>to see my work 
			</br> enter '<font color='pink'>bilal'</font> to read more about me </font>
";
											}
		elseif($cmd == "mywork"  || $cmd=="Mywork" || $cmd=="my work" || $cmd=="My Work" || $cmd=="My work" || $cmd=="MYWORK") 
						{ header("location:/work.php");
							exit();
											}
		
		elseif($cmd =="bilal" || $cmd =="BILAL" || $cmd =="Bilal")
						{ echo ' 
						<div class="about_hacker"> 
						 <p> Name: <b> Bilal Barzinji </b></p>
						 <p> Age : <b> 17 </b></p>
						 <p> Nationality : <b> Iraqi </b></p>
						 <p> Address : <b> Zanko99,Erbil,IRAQ </b></p>
						 <p> PhoneNo : <b> +964 770 851 2691 </b></p>
						 <p> Email : <b> b@b2l2l.com </b> </p>
						 <p> You want more ? write  <font color="red">more</font> to view my CV.</p>
						 </div>
						 
							 		
					
						  '; }
		elseif($cmd =="more")
				{ header("location:/cv.php");
							exit();
											}
		elseif($cmd=="skills")
				{  
				include 'skills.php';
 
										;
				}
		else {
		echo " <p> don't Try to be smart and enter something i didn't tell you about .</p> " ;
		     }
											
?>
  </br></br></br></br></br></br></br></br></br></br></br>
<form method="GET">
<font color='white' >root@b2l2l:</font> <input type="text" name="o"><br>
</form>











  <div id="credit">coded by <a href="http://b2l2l.com">Bilal barzinji</a>.<a href="http://github.com/b2l2l/hackerportfolio">Source code on github</a>.</div>
 </body
</html>

