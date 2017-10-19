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
			<h1 class="title">Luxemburg</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM luxemburg");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  &nbsp;&nbsp;&nbsp; Marele Ducat de Luxemburg (Groussherzogtum Lëtzebuerg în luxemburgheză) este un stat în Europa care face parte din grupul de țări Benelux (alături de Belgia și Țările-de-Jos) și din Uniunea Europeană.<br/><br/>
<div style="width:100%" align="center"><img src="images/luxemburg.png"></div><br/>
Istoria înregistrată a Marelui Ducat al Luxemburgului începe odată cu construcția Castelului Luxemburg în anul 963. În jurul acestei fortărețe s-a dezvoltat treptat un oraș care a devenit centrul unui stat mic dar important. Comitatul Luxemburg este ridicat la rang de Ducat în 1354. În 1437 a avut loc o criză, familia conducătoare neavând moștenitori legitimi pentru tron. În secolele următoare, fortăreața Luxemburg a fost în mod constant mărită și întărită de cei care au ocupat-o, între alții, Bourbonii, Habsburgii, Hohenzollernii și francezii. Chiar și după înfrângerea lui Napoleon în 1815, când Congresul de la Viena a conferit autonomie formală Luxemburgului, țara a devenit obiectul unei dispute între Prusia și Olanda.</p>-->
			<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM luxemburg");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM luxemburg";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO luxemburg (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM luxemburg");
        
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
