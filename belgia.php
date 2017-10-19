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
			<h1 class="title">Belgia</h1>
			<div class="content">
			<?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM belgia");
			
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Submit'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
	?>
			
				<!--<p>  &nbsp;&nbsp;&nbsp; Regatul Belgiei (neerlandeză Koninkrijk België, franceză Royaume de Belgique, germană Königreich Belgien, cunoscut colocvial ca Belgia (neerlandeză België, franceză Belgique, germană Belgien) este o țară în Europa de Vest. Este unul dintre membrii fondatori ai Uniunii Europene și găzduiește majoritatea instituțiilor acesteia precum și alte instituții internaționale importante, inclusiv OTAN. Belgia ocupă un teritoriu de 30.528 km² și are o populație de aproximativ 10,5 milioane de locuitori. Belgia se învecinează cu Țările de Jos, Germania, Marele Ducat al Luxemburgului, Franța și Marea Nordului.
<br/>&nbsp;&nbsp;&nbsp;
Belgia este situată pe frontiera ce divide Europa germanică de Europa latină iar cele două mari regiuni ale țării marchează acest lucru. Regiunea de limbă neerlandeză Flandra, situată în jumătatea de nord a țării, are 58% din populație iar regiunea de limbă franceză Valonia, situată în jumătatea de sud, are 32% din populație. <br/><br/>
<div style="width:100%" align="center"><img src="images/belgia.png"></div><br/>
Regiunea Capitalei Bruxelles, oficial bilingvă, este o enclavă majoritar francofonă situată în Regiunea Flamandă, dar în apropiere de frontiera cu regiunea valonă și are 10% din populație. O mică comunitate germanofonă există în estul Valoniei. Diversitatea lingvistică și conflictele politice și culturale asociate acesteia sunt reflectate în istoria politică și în sistemul complex de guvernare
<br/>&nbsp;&nbsp;&nbsp;
Numele 'Belgia' este derivat din numele provinciei romane Gallia Belgica, situată în extremitatea nordică a Galiei, locuită inițial de către belgi, un amestec de popoare celtice și germanice. Aceștia sunt menționați de către Iulius Cezar în Commentarii de Bello Gallico, numindu-i drept cei mai puternici dintre gali: "Horum omnium fortissimi sunt Belgæ". </p>-->

<?php
	if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$conn = mysqli_connect('localhost','root','','ckeditor');
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$delete = mysqli_query($conn, "SELECT * FROM belgia");
		while($row = mysqli_fetch_array($delete)){
			$sql = "DELETE FROM belgia";
			$result = $conn->query($sql);
		}
		$query = mysqli_query($conn, "INSERT INTO belgia (content) VALUES ('$text')");
		
		$query2 = mysqli_query($conn, "SELECT * FROM belgia");
        
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


