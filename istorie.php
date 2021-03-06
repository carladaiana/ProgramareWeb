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
			<li><a href="istorie.php" accesskey="I" title="Istorie" style="background: #DCDCDC;border-top-color: #1A7196;"><b>I</b>storie</a></li>
			<li><a href="state.php" accesskey="M" title="State Membre">State <b>M</b>embre</a></li>
			<li><a href="galerie.php" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
<div id="page2">
	<div id="content2">
		<div id="welcome" class="boxed2">
			<h1 class="title">Istorie</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM content");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
				<!--<p>&nbsp;&nbsp;&nbsp;Tentative de unificare a națiunilor europene au existat încă dinaintea apariției statelor naționale moderne. Acum trei mii de ani, Europa era dominată de celți, iar mai târziu a fost cucerită și condusă de Imperiul Roman, centrat în Mediterană. Aceste uniuni timpurii au fost create cu forța. Imperiul Franc <img src="images/ueu.gif" style="margin:5px;float:left">al lui Carol cel Mare și Sfântul Imperiu Roman au unit zone întinse sub o singură administrație pentru sute de ani. Uniunea vamală a lui Napoleon și mai recentele cuceriri ale Germaniei naziste din anii 1940 au avut doar o existență tranzitorie.
<br/>&nbsp;&nbsp;&nbsp;
Înainte de a deveni un adevărat obiectiv politic, ideea unificării Europei nu era decât un vis al filozofilor şi vizionarilor. Victor Hugo, de exemplu, a avansat ideea „Statelor Unite ale Europei”, fiind inspirat de idealurile umaniste. Visul acesta a fost însă spulberat de groaznicele războaie care au devastat continentul în prima jumătate a secolului XX.

O nouă formă de speranţă a luat însă naştere din ruinele celui de-al doilea război mondial. Cei care au opus rezistenţă totalitarismului în timpul celui de-al doilea război mondial erau hotărâţi să pună capăt antagonismului internaţional şi rivalităţilor în Europa şi şi astfel să creeze condiţiile necesare unei păci durabile. Între 1945 şi 1950, câţiva oameni de stat, precum Robert Schuman, Konrad Adenauer, Alcide de Gasperi şi Winston Churchill, s-au hotărât să convingă cetăţenii de necesitatea intrării într-o eră nouă, cea a unei organizări structurate a Europei Occidentale, bazată pe interese comune şi fondate pe tratate, care ar garanta statul de drept şi egalitatea între toate ţările membre.

Preluând o idee mai veche a lui Jean Monnet, Robert Schuman (ministru de Externe al Franţei) propune, la 9 mai 1950, instituirea Comunităţii Europene a Cărbunelui şi Oţelului (CECO). Astfel, ţările care odinioară se confruntau pe câmpul de luptă decid să plaseze producţia de cărbune şi oţel sub responsabilitatea unei autorităţi supreme comune. Din punct de vedere practic, dar şi simbolic, spectrul conflictelor a fost transformat într-un instrument al păcii şi reconcilierii.<br/>  
Dată fiind diversitatea lingvistică și culturală a Europei, aceste încercări au implicat, de obicei, ocupația militară a națiunilor, conducând la instabilitate; unele încercări, însă, au durat mii de ani și au fost însoțite de progrese economice și tehnologice, așa cum s-a întâmplat cu Imperiul Roman în timpul așa-numitei Pax Romana. Una dintre primele propuneri pentru o unificare pașnică prin cooperare și egalitatea statutului de membru a fost făcută de Victor Hugo în 1851. În urma catastrofelor provocate de Primul și Al Doilea Război Mondial, necesitatea formării unei (ce a devenit mai târziu) Uniuni Europene a crescut, din cauza voinței de a reconstrui Europa și de a elimina posibilitatea unui nou război. Acest sentiment a dus, în cele din urmă, la formarea Comunității Europene a Cărbunelui și Oțelului de către Germania (de vest), Franța, Italia și țările din Benelux. Acest lucru a fost posibil prin semnarea, în aprilie 1951, a Tratatului de la Paris, care a intrat în vigoare în iulie 1952.
<br/>&nbsp;&nbsp;&nbsp;<img src="images/ue3.jpg" style="margin:10px;border:1px solid black;float:right">
Prima uniune vamală totală, denumită inițial drept Comunitatea Economică Europeană (informal chiar și Piața Comună), a fost creată prin Tratatul de la Roma, în 1957, și implementată la 1 ianuarie 1958. Aceasta din urmă s-a transformat în Comunitatea Europeană, care este, în prezent, "primul pilon" al Uniunii Europene. UE a evoluat dintr-un organ comercial într-un parteneriat economic și politic. Definitivarea Uniunii Europene s-a făcut prin ratificarea de către ansamblul țărilor membre ale Comunității Europene a Tratatului de la Maastricht (Olanda), pe 7 februarie 1993. Ca președinte al Convenției pentru Viitorul Europei, fostul președinte francez Valéry Giscard d'Estaing a propus schimbarea numelui Uniunii Europene în Europa Unită, dar această moțiune nu a fost aprobată.
</p>-->
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

<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM content");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM content";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO content (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM content");
        
        while($row = mysqli_fetch_array($query2))
        {
            echo $row['content'];
        }
	}

?>
