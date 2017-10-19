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
			<li><a href="state.php" accesskey="M" title="State Membre">State <b>M</b>embre</a></li>
			<li><a href="galerie.php" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
<div id="page2">
	<div id="content2">
		<div id="welcome" class="boxed2">
			<h1 class="title">Resurse pentru tineri</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM tineri");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  &nbsp;&nbsp;&nbsp; <b>Portalul European pentru Tineret</b>
<br/><br/>&nbsp;&nbsp;&nbsp;
Pentru tinerii cu vârsta cuprinsă între 15 şi 25 de ani şi nu numai, Comisia Europeană a creat, în urmă cu câţiva ani, Portalul European pentru Tineret, urmărind să ofere unui număr cât mai mare de tineri acces rapid şi facil la informaţii relevante despre aspecte legate de tineret din Europa. Astfel, portalul urmăreşte să încurajeze participarea tinerilor în viaţa publică şi să contribuie la cetăţenia lor activă.  
<br/><br/>&nbsp;&nbsp;&nbsp;
<b>Oferte de educaţie din spaţiul european</b>
<br/><br/>&nbsp;&nbsp;&nbsp;
Oferte de studiu, posibilităţi de formare disponibile în întreaga Uniune Europeană, informaţii despre programele de schimb şi burse. Despre toate acestea găsiţi informaţii prin intermediul portalului  PLOTEUS (Portalul Ofertelor de Educaţie din Spaţiul European), coordonat de Direcţia generală pentru educaţie şi cultură a Comisiei Europene. Cu ajutorul portalului PLOTEUS, pe lângă acces direct la web site-uri ale universităţilor şi instituţiilor de învăţământ superior, baze de date cu şcoli şi cursuri de formare profesională şi educaţia adulţilor, aveţi acces şi la informaţii despre ţara în care doriţi să studiaţi (costuri pentru subzistenţă, taxe de studii, cazare, cadrul legal etc.), inclusiv despre sistemul de învăţământ de acolo. </p>-->

<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM tineri");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM tineri";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO tineri (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM tineri");
        
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
