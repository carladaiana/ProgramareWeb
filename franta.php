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
			<h1 class="title">Franta</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM franta");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Submit'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  &nbsp;&nbsp;&nbsp; Franța (franceză France, /fʁɑ̃s/), oficial Republica Franceză (franceză: République française, /ʁepyblik fʁɑ̃sɛz/) este o țară situată în Europa de Vest (Franța metropolitană), care cuprinde și diverse insule și teritorii situate în alte părți ale planetei (Franța de peste mări).
<br/>&nbsp;&nbsp;&nbsp;
Dintre marile state europene, Franța este cel mai vechi stat constituit în jurul unui domeniu regal, inițial organizat în jurul regiunii Île-de-France a cărei capitală este Parisul. Franța este membră a Consiliului Europei, membră fondatoare a Uniunii Europene, a zonei Euro și a Spațiului Schengen. Este de asemenea unul din membrii fondatori ai Organizației Națiunilor Unite și unul din cei cinci membri permanenți ai Consiliului de securitate ONU.<br/><br/>
<div style="width:100%" align="center"><img src="images/franta.png"></div><br/>
Face parte și din Uniunea Latină, Organizația Internațională a Francofoniei și din G8.
<br/>&nbsp;&nbsp;&nbsp;
Republica Franceză este un stat unitar fiind o democrație organizată ca o republică semi-prezidențială. Este o națiune dezvoltată având cea de-a cincea economie mondială în 2008. Valorile pe care aceasta le apără și de care se simte foarte atașată sunt exprimate în Declarația Drepturilor Omului și ale Cetățeanului.
<br/>&nbsp;&nbsp;&nbsp;
Din punct de vedere militar Franța este membră a NATO (din ale cărui structuri militare s-a retras în 1968 pentru a reveni parțial în 2002) și este una din cele șapte țări deținătoare în mod oficial ale bombei atomice. Este considerată una dintre marile puteri de după cel de al Doilea Război Mondial.</p>-->
			
			<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM franta");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM franta";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO franta (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM franta");
        
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

