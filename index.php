<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hacker Portfolio coded by Bilal barzinji . - Personal website of Bilal . ">
    <meta name="author" content="Bilal Barzzinji">

 <!-- Page title line 14 , line 15 is includeing the css code , line 16includeing j-qeury lib -->
		<title>Bilal Barzinji - guest@b2l2l.com</title>
		<link rel="stylesheet" type="text/css" href="./style.css" media="screen" title="Default" />
		<link rel="stylesheet" type="text/css" href="./css/skills.css" media="screen" title="Default" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
 </head>
 <body>
			<a href="./index.php"><img src='./logo.png' width='200' alt='logo of hacker portfolio'></a>
		<?php
	$cmd = $_GET["o"];
		if ($cmd == "") 
						{
			echo " <br><p>#NEVER TRY TO HACK A HACKER <br>enter '<font color='red'>mywork' </font>to see my work 
			<br> enter '<font color='pink'>bilal'</font> to read more about me <br>
			enter '<font color='pink'>skills'</font> you will see what Bilal is good at .</p> </font>
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
  
<form method="GET">
<p>root@b2l2l: <input type="text" name="o"></p><br>
</form>




<script>
<!-- 
document.write(unescape("%3Cscript%3E%0A%3C%21--%0Adocument.write%28unescape%28%22%250A%253C%2521--%2520footer%2520.%2520please%2520keep%2520my%2520rights%2520or%2520at%2520least%2520star%2520the%2520project%2520on%2520github%2520.%2520--%253E%2520%250A%2509%253C/br%253E%253C/br%253E%250A%2520%2520%253Cdiv%2520id%253D%2522credit%2522%253Ecoded%2520by%2520%253Ca%2520href%253D%2522http%253A//b2l2l.com%2522%253EBilal%2520barzinji%253C/a%253E.%253Ca%2520href%253D%2522http%253A//github.com/b2l2l/hackerportfolio%2522%253ESource%2520code%2520on%2520github%253C/a%253E.%253C/div%253E%250A%2520%22%29%29%3B%0A//--%3E%0A%3C/script%3E"));
//-->
</script>
</body>
</html>

