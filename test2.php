<?php 


include './image_class.php';

$obj_image = new Image();

if(@$_POST['Submit'])
{
 $obj_image->image_name=str_replace("'", "''", $_POST['txt_image_name']);
 $obj_image->image=str_replace("'", "''", $_POST['txt_image']);

  $obj_image->Insert_into_image();

  $data_image=$obj_image->get_all_image_list();
 $row=mysql_num_rows($data_image);
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>NOvaeye </title>
</head>
<body>
 <CENTER><H1>Novaeyewear</H1></CENTER>
 <CENTER><H2>Sunglass</H2></CENTER>

  <CENTER>
  <form method="post" enctype="multipart/form-data">
   <table border="1" width="80%">
    <tr>
     <th width="50%">IMage NAme</th>
     <td width="50%"><input type="text" name="txt_image_name"></input></td>
    </tr>
    <tr>
     <th width="50%">Upload IMage</th>
     <td width="50%"><input type="file" name="txt_image"></input></td>
    </tr>
    <tr>
     <td></td>
     <td width="50%"><input type="submit" name="Submit" value="Submit"></input></td>
    </tr>
   </table>
  </form>
 </CENTER>

  <?php 
  if($row!=0)
  {
  ?>
  <center>
   <table width="80%" border="1"> 
   <?php
    $icount = 1;
    while($data= mysql_fetch_assoc($data_image))
    {
     ?>
     <tr>
      <td><?php echo $icount; ?></td>
      <td><?php echo $data['image_name']?></td>
      <td><img src="images/<?php echo $data['image']; ?>" width="400px" height="200px"></td>
     </tr>
     <?php
     $count++;
     }
     ?>
   </table>
  </center>
  <?php
 }

  ?>
</body>
</html>
