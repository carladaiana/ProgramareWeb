<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="ckeditor/ckeditor.js"></script>
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
			<li><a href="state.php" accesskey="M" title="State Membre" style="background: #DCDCDC;border-top-color: #1A7196;">State <b>M</b>embre</a></li>
			<li><a href="galerie.php" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
<div id="page2">
	<div id="content2">
		<div id="welcome" class="boxed2">
			<h1 class="title">State Membre</h1>
			<div class="content">
			
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM state");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
			
				<!--<p>   În prezent, Uniunea are 28 membri, dintre care șase membri fondatori din 1958:<br/><br/>
 <a href="belgia.php">Belgia</a><br/>
 <a href="franta.php">Franța</a><br/>
 <a href="germania.php">Germania</a><br/>
 <a href="italia.php">Italia</a><br/><img src="images/work.png" style="margin:10px;border:1px solid black;float:right">
 <a href="luxemburg.php">Luxemburg</a><br/>
 <a href="olanda.php">Olanda</a><br/>
<br/>
Alte 22 state au aderat succesiv:<br/><br/>
1973: <br/><br/>
 Danemarca<br/>
 Irlanda<br/>
 Regatul Unit<br/><br/>
1981: <br/><br/>
 Grecia<br/><br/>
1986: <br/><br/>
 Portugalia<br/>
 Spania<br/><br/>
1995: <br/><br/>
 Austria<br/>
 Finlanda<br/><img src="images/ue5.jpg" style="margin:10px;border:1px solid black;float:right">
 Suedia<br/><br/>
2004: <br/><br/>
 Cipru<br/>
 Estonia<br/>
 Letonia<br/>
 Lituania<br/>
 Malta<br/>
 Polonia<br/>
 Cehia<br/>
 Slovacia<br/>
 Slovenia<br/>
 Ungaria<br/><br/>
2007: <br/><br/>
 Bulgaria<br/>
 România<br/><br/>     
2013: <br/><br/>
 Croația</br> </p>-->
 
 			<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM state");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM state";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO state (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM state");
        
        while($row = mysqli_fetch_array($query2))
        {
            echo $row['content'];
        }
	}

?>
 
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
