<?php
    $db=mysqli_connect("localhost", "root", "", "photos");
    $msg = "";
    
    if(isset($_POST['upload'])){
        //$target_dir="imagini/";
        $target="imagini/" . basename($_FILES['image']['name']);
        
        $image=$_FILES['image']['name'];
        $text=$_POST['text'];
        
        $sql="INSERT INTO images (image, text) VALUES ('$image', '$text')";
        mysqli_query($db, $sql);
        
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg="Imaginea s-a încărcat cu succes!";
        }else{
            $msg="A apărut o problema cu încărcarea imaginii.";
        }
    } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Uniunea Europeana</title>
	<meta name="keywords" content="" />
    <meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" />
	
<style>
        form{
			width: 50%;
			margin: 20px auto;
		}
		form div{
			margin-top: 5px;
		}
		#img_div{
			width: 80%;
			padding: 5px;
			margin: 15px auto;
			border: 1px solid #cbcbcb;
		}
		#img_div:after{
			content: "";
			display: block;
			clear: both;
		}
		img{
			float: left;
			margin: 5px;
			width: 300px;
			height: 140px;
		}
</style>
	
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
			<h1 class="title">Share-uiește cu noi!</h1>
			<div class="content">
			<?php
                $db=mysqli_connect("localhost", "root", "", "photos");
                $sql="SELECT * FROM images";
                $result=mysqli_query($db, $sql);
                
                while($row=mysqli_fetch_array($result)){
                    echo "<div id='img_div'>";
                        echo "<img src='images/".$row['image']."'>";
                        echo "<p>".$row['text']."</p>";
                    echo "</div>";
                }
			?>
			
			<form method="post" action="share.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" cols="40" rows="4" placeholder="Simte-te liber să împărtășești cu noi câteva gânduri.."></textarea>
                </div>
                <div>
                    <input type="submit" name="upload" value="Încarcă poza ">
                </div>
            </form>
			
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
