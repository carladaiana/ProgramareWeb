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
			<li><a href="istorie.php" accesskey="I" title="Istorie" ><b>I</b>storie</a></li>
			<li><a href="state.html" accesskey="M" title="State Membre" style="background: #DCDCDC;border-top-color: #1A7196;">State <b>M</b>embre</a></li>
			<li><a href="galerie.php" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
<div id="page2">
	<div id="content2">
		<div id="welcome" class="boxed2">
			<h1 class="title">Olanda</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM olanda");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  &nbsp;&nbsp;&nbsp;Olanda, oficial Țările de Jos (în neerlandeză Nederland, în frizonă Nederlân) este o monarhie constituțională, stat membru fondator al Beneluxului și al Uniunii Europene, situat în nord-vestul Europei în vecinătatea Mării Nordului, Belgiei și Germaniei, incluzând alături de Regatul Țărilor de Jos și câteva colonii.
<br/>&nbsp;&nbsp;&nbsp;
Numele colocvial de Olanda, sub care mai sunt cunoscute Țările de Jos, acoperă însă doar o parte din teritoriul țării, anume provinciile Olanda de Nord și Olanda de Sud. Locuitorii Țărilor de Jos sunt numiți în engleză Dutch, nume derivat de la aceeași rădăcină ca germană deutsch, adică "germani". Limba neerlandeză este forma literară a germanei plate, limba vorbită ca dialect în nordul Germaniei.<br/><br/>
<div style="width:100%" align="center"><img src="images/olanda.png"></div><br/>
Un sfert din teritoriul Țărilor de Jos se află sub nivelul mării cu altitudine medie, statul având cea mai joasă altitudine din lume. De asemenea este una dintre țările cele mai dens populate din lume. Este cunoscută pentru digurile, morile și lalelele sale, dar și pentru toleranța sa pe plan social. Este membră NATO și UE. Pe teritoriul său se află sediul Curții Penale Internaționale
<br/>&nbsp;&nbsp;&nbsp;
Capitala Țărilor de Jos este Amsterdam. Amsterdam este capitala oficială conform Constituției. La Haga (neerlandeză Den Haag, sau oficial ’s-Gravenhage) se află sediul guvernului, reședința regală, precum și cea mai mare parte a ambasadelor.</p>-->
			<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM olanda");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM olanda";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO olanda (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM olanda");
        
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
