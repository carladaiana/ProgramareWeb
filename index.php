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
			<li><a href="index.php" accesskey="P" title="Prima Pagina" style="background: #DCDCDC;border-top-color: #1A7196;"><b>P</b>rima Pagina</a></li>
			<li><a href="istorie.php" accesskey="I" title="Istorie"><b>I</b>storie</a></li>
			<li><a href="state.php" accesskey="M" title="State Membre">State <b>M</b>embre</a></li>
			<li><a href="galerie.php" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
<div id="page">
	<div id="content">
		<div id="welcome" class="boxed2">
			<h1 class="title">Prima Pagina</h1>
			<div class="content">
			
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM first");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
			
				<!--<p>&nbsp;&nbsp;&nbsp;Uniunea Europeana este o organizatie a tarilor europene dedicata cresterii integrarii economice si intarirea cooperarii intre state.Uniunea Europeana are sediul in Bruxelles, Belgia. <br/>Pentru a începe o afacere într-o altă ţară din Uniunea Europeană, este necesar să cunoaşteţi condiţiile din ţara respectivă în ceea ce priveşte înfiinţarea sau preluarea unei întreprinderi, gestionarea afacerilor etc.
<br/>&nbsp;&nbsp;&nbsp;<img src="images/ueu2.gif" style="margin:5px;float:left">
În acest sens, informaţii practice în mai multe limbi şi servicii guvernamentale on-line pentru întreprinderile care doresc să-şi extindă activitatea în alte ţări din UE se găsesc în secţiunea "Întreprinderi" a portalului Europa ta. Această secţiune oferă informaţii şi acces la documente şi servicii din UE şi din fiecare ţară în parte.

 <br/>&nbsp;&nbsp;&nbsp;


 

Întreprinderile mici care îşi caută parteneri în altă ţară a Uniunii sau care au nevoie de sfaturi privind dezvoltarea unor idei inovatoare ori solicitarea unei finanţări europene pentru activităţi de cercetare se pot adresa membrilor Reţelei întreprinderilor europene - Enterprise Europe network. Reţeaua include 40 de ţări europene (statele membre UE, ţările candidate, membrii Spaţiului Economic European şi ţări terţe).


 
<br/>&nbsp;&nbsp;&nbsp;
 

În 2003, Comisia Europeană a creat Grupul de consultare a întreprinderilor europene (EBTP), urmărind să-i implice pe reprezentanţii întreprinderilor în pregătirea iniţiativelor politice şi legislative ale UE. Informaţii despre cum poate o întreprindere să devină membră a EBTP şi ce beneficii ar putea avea se găsesc pe site-ul EBTP.
<br/><br/>
<div style="width:100%" align="center"><img src="images/ue2.jpg"></div>
</p>-->

<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM first");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM first";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO first (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM first");
        
        while($row = mysqli_fetch_array($query2))
        {
            echo $row['content'];
        }
	}

?>

			</div>
		</div>
	</div>
	<div id="sidebar">
		<div id="news" class="boxed1">
			<h2 class="title">Resurse</h2>
			<div class="content">
				<ul>
					<li>
						<h3><a href="tineri.php">Resurse pentru tineri</a></h3>
						<p>Pentru tinerii cu vârsta cuprinsă între 15 şi 25 de ani şi nu numai, Comisia Europeană a creat... <a href="tineri.php">Citeste mai mult&hellip;</a></p>
					</li>
					<li>
						<h3><a href="calatorii.php">Călătorii prin Europa</a></h3>
						<p>Cetăţenii români pot călători liber în Europa. <a href="calatorii.php">Citeste mai mult&hellip;</a></p>
					</li>
					<li>
						<h3><a href="concursuri.php">Concursuri</a></h3>
						<p>S-a lansat concursul pentru alegerea numelui noului Program UE... &nbsp;<a href="concursuri.php">Citeste mai mult&hellip;</a></p>
					</li>
					<li>
						<h3><a href="https://www.youtube.com/watch?v=Jo_-KoBiBG0">Imn UE</a></h3>
						
					</li>
					<li>
                        <h3><a href="quiz.php">QUIZ</a></h3>
                    </li>
                    <li>
                        <h3><a href="shareuieste.php">Share-uieste cu noi!</a></h3>
                    </li>
				</ul>
			</div>
		</div>
	</div>
	<div style="clear: both; height: 1px;"></div>
</div>
<div id="footer">
	<p>Copyright &copy; 2017 - Uniunea Europeana</p>
</div>
</body>
</html>

