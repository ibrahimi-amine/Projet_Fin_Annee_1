<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if(!isset($_POST["submit"]))
             {?>
    <form action="testup.php" method="post" enctype="multipart/form-data">
      Select image to upload :
      <input type="file" name="file">
      <input type="submit" name="submit">
    </form>
  <?php }
    else {
      if(empty($_FILES["file"]["name"]))
        {echo 'empty';}
      else {


      $file_name=$_FILES["file"]["name"];
      $file_tmp=$_FILES["file"]["tmp_name"];
      $temp=explode('.',$_FILES['file']['name']);
      $file_ext=strtolower(end($temp));
      $ext_auth=array("jpeg","jpg","png");
      if(in_array($file_ext,$ext_auth))
        {move_uploaded_file($file_tmp,"img/".$file_name);
         echo 'ok';
        }
      else
        {echo 'extension not supported';
         }
     }}

   ?>
  </body>
</html>
