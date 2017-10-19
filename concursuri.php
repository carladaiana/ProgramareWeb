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
			<h1 class="title">Concursuri</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM concursuri");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  
&nbsp;&nbsp;&nbsp;
S-a lansat concursul pentru alegerea numelui noului Program UE de Cercetare și Inovare 

Dacă sunteți cercetător, inginer, om de afaceri, student sau pur și simplu o persoană inovatoare sau creativă, puteți să propuneți, până la data de 10 mai, un nume relevant, atrăgător și ușor de reținut pentru noul Program UE de Cercetare și Inovare. Concursul lansat astăzi de Comisia Europeană este legat de consultarea părților interesate, organizată în prezent de Comisie, cu referire la Cartea sa Verde privind noul program care va sta la baza inițiativei „Uniunea Inovării” și a strategiei Europa 2020.  

 <br/><br/>&nbsp;&nbsp;&nbsp; 

<b>Concurs de eseuri "Shakespeare School Essay Competition” </b>
<br/>
În contextul Anului european al Voluntariatului 2017, Centrul Shakespeare School a lansat a treia ediţie a concursului de eseuri în limba engleză pentru elevi de gimnaziu şi liceu - 2017 "Shakespeare School Essay Competition”. Tema eseului,  pentru grupa de vârstă 15-18 ani (elevii de liceu), va fi voluntariatul. La această a treia ediţie a concursului de eseuri, marii câştigători vor beneficia de şcoli de vară de limba engleză, gratuite în Marea Britanie (la Cambridge şi Oxford), în valoare de peste 1.500 euro, dar şi de alte surprize. Ediţia de anul trecut a avut o amploare naţională, primind peste 3.000 de eseuri de la tineri din toată ţara. Câştigătorii vor fi anunţaţi pe 10 iunie 2017.



  <br/><br/>&nbsp;&nbsp;&nbsp;

<b>Concurs de desene - Ziua Europei </b>
<br/>
Reprezentanţa Comisiei Europene în România (RCE) invită elevii din şcolile din România să participe la un concurs de desene a cărui tematică este Ziua Europei. Concursul se adresează elevilor din ciclul primar şi cel gimnazial, care sunt invitaţi să dezvolte creaţii proprii, fără contribuţia altor persoane.


 <br/><br/>&nbsp;&nbsp;&nbsp;

<b>Concurs - Juvenes Translatores </b>
<br/>

Aproximativ 3 300 de tineri din întreaga Europă își vor testa aptitudinile lingvistice în cea de‑a patra ediție anuală a concursului pentru elevi de liceu „Juvenes Translatores”, organizat de Comisia Europeană la 23 noiembrie 2017. Concursul va avea loc concomitent în toate școlile, din Kittilä în Laponia finlandeză până la Limassol în Cipru. Concursul durează două ore, între 10 și 12 ora Bruxelles‑ului, sub supravegherea școlilor. Din România participă elevi de la 33 de licee.

Traducerile vor fi evaluate și notate de către traducători profesioniști din cadrul Direcției Generale Traduceri. Juriul concursului va alege cea mai bună traducere din fiecare stat membru, iar câștigătorii vor fi anunțați în februarie 2018. </p>-->

<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM concursuri");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM concursuri";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO concursuri (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM concursuri");
        
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
