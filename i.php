<!DOCTYPE html>
<html lang="en">
    <?php include('config.php');?>
     <?php include('confi.php');?>
   
    <?php include('header.php');?>

  <body>
   <?php include('topnav.php');?> 
  
 
 <?php

@$opt=$_GET['o'];

// error_reporting(0);
    ?>


        <?php
if($opt=="")
{
include('background.php');
}
      
   
   // if($opt=="")
 // {
// include('loader.php');
// }

else
{
      if($opt=="a")
      {
      include('abouts.php');
      }


     else if($opt=="g")
      {
      include('gallery.php');
      }

     else if($opt=="")
      {
      include('');
      }
    

}
?>

    <?php include('newsletter.php');?>  
 
 <?php include('footer.php');?> 


<?php include('scripts.php');?> 
  
  </body>
</html>