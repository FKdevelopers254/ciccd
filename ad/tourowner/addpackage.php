
<?php
//error_reporting(0);

 
if(strlen($_SESSION['user_id'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
     $driverid=$_POST['driverid'];
    $packagename=$_POST['packagename'];
$kes=$_POST['kes'];
    	$usd=$_POST['usd'];
    $nights=$_POST['nights'];
     $days=$_POST['days'];
     $description=$_POST['description'];
    
        

$sql="INSERT INTO tourpackages(driverid,packagename,kes,usd,nights,days,description) VALUES(:driverid,:packagename,:kes,:usd,:nights,:days, :description)";
$query = $DB->prepare($sql);
    $query->bindParam(':driverid',$driverid,PDO::PARAM_STR);
$query->bindParam(':packagename',$packagename,PDO::PARAM_STR);
    $query->bindParam(':kes',$kes,PDO::PARAM_STR);

$query->bindParam(':usd',$usd,PDO::PARAM_STR);
    $query->bindParam(':nights',$nights,PDO::PARAM_STR);
    
    $query->bindParam(':days',$days,PDO::PARAM_STR);
    
    $query->bindParam(':description',$description,PDO::PARAM_STR);
   


$query->execute();
$lastInsertId = $DB->lastInsertId();
if($lastInsertId)
{
$msg="Package Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
    
    
    
    
   

	?>


<div  style="background-image: url('../../images/bg_1.jpg'); width:100%; height:80px;"></div>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar ftco-animate">
        		<div class="sidebar-wrap bg-light ftco-animate">
                     <input onclick="document.getElementById('id011').style.display='block'"  value="Add New" class="btn btn-primary py-3 px-3">
                            <br>
                    
                    <?php if($error){?><div class="boxes"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div> </div>
                    
                    <?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }  ?>
        			
        			
             
                 

                    





   <!--<form method="post" action="index?o=Hotels">
 
  <input type="text" name="search" required/>
  <input type="submit" value="Search" class="btn btn-primary py-3 px-5"/>
</form> --> 

        		</div>
        	
          </div>


 

<?php include('hotelsearch.php'); ?>




          <div class="col-lg-9">
          	<div class="row">


  <?php 
    
    $dd =$_SESSION["iid"];
    
    $sql = "SELECT * from tourpackages where driverid=$dd";

        $query = $dbh -> prepare($sql);
        //$query -> bindParam(':city', $city, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {       ?>


          		<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="index?o=Hotel&pid=<?php echo htmlentities($result->id);?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../../images/destination-1.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="index?o=Hotel&pid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->packagename);?></a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span> Rating</span>
				    						</p>
			    						</div>
			    						
                                        	<div class="two">
			    							<span class="price">$<?php echo htmlentities($result->usd);?></span>
			    							<br>
			    							<span class="price">KES<?php echo htmlentities($result->kes);?></span>
		    							</div>
		    							
		    						</div>
		    						<p><?php echo substr(($result->description),0,30);?> </p>
		    						<p class="days"><span><?php echo substr(($result->description),0,30);?></span></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i><?php echo htmlentities($result->cityid);?>,<?php echo htmlentities($result->countryid);?></span> 
		    							<span class="ml-auto"><a href="index?o=ETP&p=<?php echo htmlentities($result->id);?>">Edit</a></span>
                                      
                                      
		    						</p>
                                      
		    					</div>
		    				</div>
		    			</div>
		    		
<?php  }} ?><?php include('loader.php') ?>


          	</div>
          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section>






 <div id="id011" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <!--<header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id011').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Add Tour Package</h2>
      </header>-->
      <div class="w3-container">
        <BR></BR>
         <div class="col-12">
          
            
            <form autocomplete="off" method="post" action="index?o=AP">
        				
                  <div class="form-group" >
                                  
    <input class="form-control"  type="text" name="driverid" placeholder="Tour package name" value="<?php echo $_SESSION["iid"];?>" hidden>
                                  
  </div>
		             
                              <div class="form-group" >
                                  
    <input class="form-control"  type="text" name="packagename" placeholder="Tour package name" required>
                                  
  </div>  <div  class="form-group" >
                                  
    <input class="form-control"  type="number" name="kes" placeholder="Price For Residents(KES)" required>
                                  
  </div>
                
                 <div  class="form-group" >
                                  
    <input class="form-control"  type="number" name="usd" placeholder="Price For Non-Residents(USD)" required>
                                  
  </div>
                 <div  class="form-group" >
                                  
    <input class="form-control"  type="number" name="nights" placeholder="Number of Nights" required>
                                  
  </div>
                 <div  class="form-group" >
                                  
    <input class="form-control"  type="number" name="days" placeholder="Number of Days" required>
                                  
  </div>
                 <div  class="form-group" >
                                  
                     <textarea class="form-control"  type="text" name="description" placeholder="Itinerary" required></textarea>
                                  
  </div>
                            
   

                             

		            
		           
		            
		              <div class="form-group">
		                <input type="submit" name="submit" value="Upload" class="btn btn-primary py-3 px-5">
		              </div>
		          
	            </form>
            
            
            
            
            
            
            
            
            </div> </div>
      <!--<footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>-->
    </div>
  </div>



















 










 <?php } ?> 






        	   