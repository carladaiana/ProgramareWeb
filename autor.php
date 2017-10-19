<?php 
require('connect.php');
if(isset($_POST['name'])){
    $name=$_POST['name'];
    }

if(isset($_POST['comment'])){    
    $comment=$_POST['comment'];
}

if(isset($_POST['submit'])){
    $submit=$_POST['submit'];
}

if(isset($submit))
{
    if($name&&$comment)
    {
        $insert=mysqli_query(mysqli_connect("localhost","root","","comment"), "INSERT INTO comment (name, comment) VALUES ('$name','$comment')");
        header("Location: success.php");
    }
    else
    {
        echo " !!! Va rog completati toate campurile.";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Uniunea Europeana</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="logo">
		<h1><a href="#">Uniunea Europeana</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.php" accesskey="P" title="Prima Pagina"><b>P</b>rima Pagina</a></li>
			<li><a href="istorie.php" accesskey="I" title="Istorie" ><b>I</b>storie</a></li>
			<li><a href="state.php" accesskey="M" title="State Membre">State <b>M</b>embre</a></li>
			<li><a href="galerie.php" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact" style="background: #DCDCDC;border-top-color: #1A7196;"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
<div id="page2">
	<div id="content2">
		<div id="welcome" class="boxed2">
			<h1 class="title">Contact</h1>
			<div class="content">
				<!-- <table style="width:100%;font-size:16px;height:500px"><tr><td align="center" valign="middle">Persoana de contact: Bucatos Carla<br/> Mail: carla.bucatos@student.upt.ro</td></tr></table> -->
				<p style="width:50%;font-size:16px;height:100px">Persoana de contact: Bucatos Carla<br/>Mail: carla.bucatos@student.upt.ro</p>
				<p style="font-size:16px;height:50px">Lasă-ne o părere despre site!</p>
				<form action="autor.php" method="POST">
<table style="width:10%;font-size:16px;height:50px">
<tr><td>Nume: </td><td><input type="text" name="name" /></td></tr>
<tr><td colspan="2">Comentariu: </td></tr>
<tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Submit" /></td></tr>
</table>

<?php
$getquery=mysqli_query(mysqli_connect("localhost","root","","comment"), "SELECT * FROM comment ORDER BY id DESC");
while($rows=mysqli_fetch_assoc($getquery))
{
    $id=$rows['id'];
    $name=$rows['name'];
    $comment=$rows['comment'];
    $dellink="<a href=\"delete.php?id=" . $id . "\"> Delete </a>";
    
    echo '<br />' . "<B>" .$name."</b>" . '<br />' . $comment . '<br />' . '<br />' . $dellink . '<br />' . '<hr width="500px" />';
}
?>

</form>
			</div>
		</div>
	</div>
	<!-- end #content -->
	
	<!-- end #sidebar -->
	<div style="clear: both; height: 1px;"></div>
</div>
<!-- end #page -->
<div id="footer">
	<p>Copyright &copy; 2017 - Uniunea Europeana</p>
</div>
</body>
</html>
