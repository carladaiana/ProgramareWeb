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
			<li><a href="index.html" accesskey="P" title="Prima Pagina"><b>P</b>rima Pagina</a></li>
			<li><a href="istorie.html" accesskey="I" title="Istorie" ><b>I</b>storie</a></li>
			<li><a href="state.html" accesskey="M" title="State Membre" style="background: #DCDCDC;border-top-color: #1A7196;">State <b>M</b>embre</a></li>
			<li><a href="galerie.php" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
<div id="page2">
	<div id="content2">
		<div id="welcome" class="boxed2">
			<h1 class="title">Italia</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM italia");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  &nbsp;&nbsp;&nbsp; Italia, oficial Republica Italiană (italiană Repubblica Italiana, numele scurt este identic) este un stat suveran european, situat în cea mai mare parte pe Peninsula Italică și cuprinzând și câteva insule la Marea Mediterană, cele mai importante fiind Sicilia și Sardinia. Se învecinează cu Franța la nord-vest, Elveția și Austria la nord și Slovenia la nord-est. De asemenea înconjoară două enclave independente: San Marino și Vatican, și are și o exclavă înconjurată de Elveția numită Campione d'Italia. Capitala Italiei este Roma.<br/><br/>
<div style="width:100%" align="center"><img src="images/italia.png"></div><br/>
Italia a fost un loc de origine al multor culturi europene, precum etrusci și romani, și al mișcărilor culturale moderne, cea mai notabilă fiind Renașterea. Roma este un sediu al Bisericii Romano-Catolice, și a fost pentru o perioadă lungă centrul civilizației occidentale.
<br/>&nbsp;&nbsp;&nbsp;
Astăzi Italia este o republică democratică și o țară dezvoltată, ocupând a șaptea poziție conform PIB-ului, a opta conform indicelui calității vieții și a douăzecea conform indicelui dezvoltării umane. Este membru fondator al Uniunii Europene și unul dintre membri ai G8, OTAN-ului, Consiliului Europei, Uniunii Europei Occidentale.</p>-->
			<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM italia");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM italia";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO italia (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM italia");
        
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
<p>Copyright &copy; 2017 - Uniunea Europeana</p></div>
</body>
</html>
