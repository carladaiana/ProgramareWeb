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
			<h1 class="title">Germania</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM germania");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Submit'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  &nbsp;&nbsp;&nbsp; Republica Federală Germania (în germană Bundesrepublik Deutschland), denumită colocvial Germania (Deutschland, sens literal: „țara germană”), este un stat în Europa Centrală. Face parte din organizații internaționale importante precum Consiliul Europei (1951), OCDE, Uniunea Vest-Europeană (1954), NATO (1955), Uniunea Europeană (1957), ONU (1973), OSCE și din zona euro.<br/><br/>
<div style="width:100%" align="center"><img src="images/germania.png"></div><br/>
Suprafața totală a teritoriului țării este de 357.021 km², relieful fiind preponderent muntos.
<br/>&nbsp;&nbsp;&nbsp;
Germania se învecinează cu nouă țări europene: Danemarca, Olanda, Belgia, Franța, Luxemburg, Elveția, Austria, Republica Cehă și Polonia.
<br/>&nbsp;&nbsp;&nbsp;
De asemenea are ieșire directă la Marea Baltică și la Marea Nordului (Oceanul Atlantic).
<br/>&nbsp;&nbsp;&nbsp;
Germania are o climă temperată, cu o temperatură medie anuală de 9 °C. Temperatura medie în ianuarie variază de la -6 °C până la +1 °C (în funcție de localitate și altitudinea ei), în timp ce temperatura medie a lunii iulie variază între 16 și 20 °C. Precipitațiile sunt mai mari în sud, unde se înregistrează 1.980 mm pe an, majoritatea sub formă de zăpadă.</p>-->

<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM germania");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM germania";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO germania (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM germania");
        
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

