<?php		
	session_start();
?>
   

   <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="ckeditor/ckeditor.js"></script>
    </style>
    </head>

    <body>
    <?php
		$conn = mysqli_connect('localhost','root','','ckeditor');

		$query = mysqli_query($conn, "SELECT * FROM belgia");
			
		
			//if(isset($_SESSION['id']) && 1==$_SESSION['id']){
				while($row = mysqli_fetch_array($query)){
					echo "<form action='' method='POST'>
					<textarea class='ckeditor' name='editor' value=".$row['content']."></textarea>
					<input type='submit' value='Trimite'></form>";	
				echo "<span style=color:FFF>".$row['content']."</span>";
				}
			//}
			//else{
				//while($row = mysqli_fetch_array($query)){
					//echo "<span style=color:FFF>".$row['content']."</span>";
				//}
			//}
	?>
    </body>
</html>


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
