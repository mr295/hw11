<?php

  if (isset($_POST['upload'])){
    
      $image_name = $_FILES['image']['name'];
      $image_type = $_FILES['image']['type'];
      $image_size = $_FILES['image']['size'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      
  if ($image_name == ''){
    echo "<script>alert('Please Select an Image')</script>";
    exit();
      }
  else
    move_uploaded_file($image_tmp_name,"/afs/cad.njit.edu/u/m/r/mr295/public_html/hw11/uploads/ $image_name");
    echo "Image Uploaded Succesfully<br>";
}
?>