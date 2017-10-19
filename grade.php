<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
			<li><a href="state.html" accesskey="M" title="State Membre">State <b>M</b>embre</a></li>
			<li><a href="galerie.html" accesskey="F" title="Galerie Foto">Galerie <b>F</b>oto</a></li>
			<li><a href="autor.php" accesskey="C" title="Contact"><b>C</b>ontact</a></li>
		</ul>
	</div>
</div>
	<div id="page2">
	<div id="content2">
		<div id="welcome" class="boxed2">
			<h1 class="title">Europa QUIZ</h1>
			<div class="content">

		<h3>Rezultat:</h3>
		
        <?php
            
            if(isset($_POST['question-1-answers']))
            {$answer1 = $_POST['question-1-answers'];} else  {die("Completați toate câmpurile!"); } 
            
            if(isset($_POST['question-2-answers']))
            {$answer2 = $_POST['question-2-answers'];} else  {die("Completați toate câmpurile!"); }    
            
            if(isset($_POST['question-3-answers']))
            {$answer3 = $_POST['question-3-answers'];} else  {die("Completați toate câmpurile!"); }
            
            if(isset($_POST['question-4-answers']))
            {$answer4 = $_POST['question-4-answers'];} else  {die("Completați toate câmpurile!"); }
            
            if(isset($_POST['question-5-answers']))
            {$answer5 = $_POST['question-5-answers'];} else  {die("Completați toate câmpurile!"); }
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; } else {echo '<br />' . "Răspunsul corect la întrebarea 1 era: B) 28";}
            if ($answer2 == "C") { $totalCorrect++; } else {echo '<br />' . "Răspunsul corect la întrebarea a 2-a era: C) 1958";}
            if ($answer3 == "A") { $totalCorrect++; } else {echo '<br />' . "Răspunsul corect la întrebarea a 3-a era: A) 6";}
            if ($answer4 == "D") { $totalCorrect++; } else {echo '<br />' . "Răspunsul corect la întrebarea a 4-a era: D) București";}
            if ($answer5 == "C") { $totalCorrect++; } else {echo '<br />' . "Răspunsul corect la întrebarea a 5-a era: C) 2007";}
            
            echo '<br />' . '<br />' . "<div id='results'>$totalCorrect / 5 corecte</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
        </div>
    </div>
    <div style="clear: both; height: 1px;"></div>
    </div>

    <div id="footer">
	<p>Copyright &copy; 2017 - Uniunea Europeana</p>
</div>
</body>

</html>
