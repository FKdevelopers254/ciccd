<!DOCTYPE html>
<html lang="en">
   <?php
     require_once('config.php');
    error_reporting(0);
     require_once ('confi.php');?>
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
      if($opt=="AP")
      {
      include('addpackage.php');
      }


     else if($opt=="MP")
      {
      include('managepackage.php');
      }
    
     else if($opt=="ETP")
      {
      include('edittourpackage.php');
      }


    

    

  
     
    
    
    
    
    
    
   

}
?>














    
    <?php include('newsletter.php');?>  
 
 <?php include('footer.php');?> 

    
  

  

<?php include('scripts.php');?> 
    
    
  </body>
</html>