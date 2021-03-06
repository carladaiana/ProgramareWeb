﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
			<h1 class="title">Călătorii prin Europa</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM calatorii");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>  &nbsp;&nbsp;&nbsp; <b></b>
<br/><br/>&nbsp;&nbsp;&nbsp;
Cetăţenii români pot călători liber în Europa. Informaţii despre documentele necesare în acest sens se găsesc pe site-ul oficial al Uniunii Europene, de unde puteţi afla şi detalii despre condiţiile de călătorie cu maşina, cum ar fi limitele de viteză din fiecare ţară membră sau asigurarea auto, dar şi cu avionul, trenul sau vaporul. <br/> <br/></p>

<p>Portalul oferă şi informaţii utile la cumpărături (valorile TVA, moneda oficială din fiecare ţară, cantităţile de tutun şi alcool permise etc.) şi în comunicarea cu ceilalţi (prefixele de telefonie internaţionale, costul serviciilor de roaming etc.). Tot de la această pagină puteţi afla şi detalii despre îngrijirile medicale de care puteţi beneficia în timpul călătoriilor şi în ce condiţii puteţi lua câinele sau pisica în deplasările pe care le faceţi. Nu în ultimul rând, site-ul poate fi un instrument util în alegerea destinaţiei şi a perioadei în care să călătoriţi. <br/>
În planurile de vacanţă puteţi include una sau mai multe dintre Destinaţiile europene de excelenţă (EDEN). Acestea sunt alese prin iniţiativa omonimă a Comisiei Europene, care urmăreşte atât să atragă atenţia asupra valorii, diversităţii şi caracteristicilor comune ale destinaţiilor turistice europene, cât şi să promoveze destinaţiile unde obiectivul de creştere economică este urmărit ţinând cont de sustenabilitatea socială, culturală şi de mediu a turismului.<br/><br/>

Iniţiativa este lansată anual, începând din 2006, iar la tema "Turism şi moştenire locală intangibilă", a fost aleasă ca destinaţie de excelenţă şi Depresiunea Horezu din România. <br/><br/> <img src="images/ro.jpg"align="center"> <br/>
Principiul EDEN este simplu: în fiecare an este aleasă o temă de către Comisia Europeană, în cooperare cu organizaţiile naţionale de turism şi este selectată o destinaţie din fiecare ţară participantă.
Fiecare dintre temele alese are ca scop punerea în valoare a diferitelor aspecte ale atuurilor regiunilor europene şi sunt legate într-un fel sau altul de dezvoltarea durabilă, fie din punct de vedere cultural, economic, al mediului sau al implicării actorilor locali.<br/><br/>
Destinaţiile care participă la concurs trebuie să demonstreze că au dezvoltat un turism viabil din punct de vedere economic bazat pe temele EDEN ale fiecărui an. Temele EDEN dau şansa de a demonstra bogăţia diversităţii pe care o poate oferi Europa, în special resursele naturale, patrimoniul istoric, sărbătorile tradiţionale, gastronomia locală, etc.<br/><br/>
Destinaţiile eligibile, cele mai puţin cunoscute şi mai puţin vizitate, au posibilitatea de a pune în evidenţă ceea ce le face unice şi pot arăta turiştilor că îi aşteaptă o experienţă de neuitat. Destinaţiile câştigătoare sunt cele care reflectă cel mai bine tema aleasă a anului şi care oferă o experienţă turistică unică, respectând modele durabile.
<br/><br/>&nbsp;&nbsp;&nbsp;
<b></b>
<br/><br/>&nbsp;&nbsp;&nbsp;
</p>-->

<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM calatorii");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM calatorii";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO calatorii (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM calatorii");
        
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
