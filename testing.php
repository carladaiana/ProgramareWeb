<html>
<head>
    <title>ckeditor</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <form action="" method="post">
        <textarea class="ckeditor" name="editor"></textarea>
        
        <input type="submit" value="INSERT">
    </form>
    
    <?php
        /*$con = mysqli_connect('localhost','root','','ckeditor') or die("ERROR");
        $query = mysqli_query($con, "SELECT * FROM content");
        
        while($row = mysqli_fetch_array($query))
        {
            echo $row['content'];
        }*/
    ?>
    
</body>
</html>

<?php
  if(isset($_POST['editor'])){
		$text = $_POST['editor'];
		
		$con = mysqli_connect('localhost','root','','ckeditor') or die("ERROR");
		
		$query = mysqli_query($con, "INSERT INTO first (content) VALUES ('$text')");
		
		$query2 = mysqli_query($con, "SELECT * FROM first");
        
        while($row = mysqli_fetch_array($query2))
        {
            echo $row['content'];
        }
		//if($query){
          //  echo "ADDED INTO DB";
		//}
		//else{
          //  echo "ERROR WHILE INSERTING";
		//}
    }
?>
