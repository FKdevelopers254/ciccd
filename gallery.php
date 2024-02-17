<div  style="background-image: url('images/bg_1.jpg'); width:100%; height:80px;"></div>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">







          <div class="col-lg-12">
          	<div class="row">


  <?php $sql = "SELECT * from gallery";

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
		    					<a  class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo htmlentities($result->photo);?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a ><?php echo htmlentities($result->name);?></a></h3>
				    						
			    						</div>
			    						<div class="two">
			    							<span class="price"><?php echo htmlentities($result->age);?></span>
		    							</div>
		    							
		    						</div>
		    						<p><?php echo substr(($result->description),0,600);?> </p>
		    					
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i><?php echo htmlentities($result->gender);?>,</span> 
		    							<span class="ml-auto"><a>Discover</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    		
<?php  }} ?><?php include('loader.php') ?>


          	</div>
          	
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section>









 

  <div id="id52" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id52').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Wacha wewe</h2>
      </header>
      <div class="w3-container">
        <BR>
         <div class="col-4">
             <?php $sql = "SELECT * from gallery";

        $query = $dbh -> prepare($sql);
        //$query -> bindParam(':city', $city, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {       ?>	<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="index?o=Hotel&pid=<?php echo htmlentities($result->id);?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo htmlentities($result->photo);?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="index?o=Hotel&pid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->name);?></a></h3>
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
			    							<span class="price">$<?php echo htmlentities($result->age);?></span>
		    							</div>
		    							
		    						</div>
		    						<p><?php echo substr(($result->description),0,30);?> </p>
		    						<p class="days"><span><?php echo substr(($result->description),0,30);?></span></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i><?php echo htmlentities($result->gender);?>,<?php echo htmlentities($result->countryid);?></span> 
		    							<span class="ml-auto"><a href="index?o=Hotel&pid=<?php echo htmlentities($result->id);?>">Discover</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div><?php  }} ?>
            </div></BR>BR> </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">















        	