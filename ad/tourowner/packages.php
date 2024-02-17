<div  style="background-image: url('images/bg_1.jpg'); width:100%; height:80px;"></div>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar ftco-animate">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find City</h3>
        			<form method="post" action="index?o=Packages">
        				<div class="fields">
		              <div class="form-group">
		                <input type="text" class="form-control" name="search" placeholder="Destination, City" >
		              </div>

		             


		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select  class="form-control" placeholder="Keyword search">
	                    	 <option >Select Location</option>
	                    	  <?php $sql = "SELECT * from city";

        $query = $dbh -> prepare($sql);
        //$query -> bindParam(':city', $city, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {       ?>
	                     
	                      <option value=""><?php echo htmlentities($result->cityname);?></option>
	                     
	                     <?php  }} ?>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>

   <!--<form method="post" action="index?o=Hotels">
 
  <input type="text" name="search" required/>
  <input type="submit" value="Search" class="btn btn-primary py-3 px-5"/>
</form> --> 

        		</div>
        	
          </div>




<?php include('toursearch.php'); ?>




          <div class="col-lg-9">
          	<div class="row">


  <?php $sql = "SELECT * from tourpackages";

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
		    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#"><?php echo htmlentities($result->name);?></a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$<?php echo htmlentities($result->usd);?></span>
			    							<br>
			    							<span class="price">KES<?php echo htmlentities($result->kes);?></span>
		    							</div>
		    					
		    						</div>
		    						<p><?php echo substr(($result->description),0,30);?> </p>
		    						<p class="days"><span><?php echo htmlentities($result->days);?> days <?php echo htmlentities($result->nights);?> nights</span></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i><?php echo htmlentities($result->cityname);?>,<?php echo htmlentities($result->countryname);?></span> 
		    							<span class="ml-auto"><a href="index?o=TourPackages&p=<?php echo htmlentities($result->id);?>">Discover</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    		
<?php  }} ?>


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