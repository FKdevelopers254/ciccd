    <div class="hero-wrap js-fullheight" style="background-image: url('../../images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>TOUR PACKAGES</strong> </h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Data entry system for manipulation of combined data enhancing a broader search system for users</p>
           
         
            <p class="browse d-md-flex">
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i> Tour Packages</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-hotel"></i></a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Popular Destinations</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Best Sceneries</a></span>
              <span class="d-flex justify-content-md-center align-items-md- center"><a href="#"><i class="flaticon-shopping-bag"></i>Car Rental</a></span>
                
                
                
            </p>
          </div>
        </div>
      </div>
    </div>




 





<!--
<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          </div>
        </div>
      </div>
 
      <div class="container-fluid">
        <div class="row">



          <div class="destination-slider owl-carousel  ftco-animate">
                   <?php $sql = "SELECT city.id,city.cityname,hotel.cityid from city join hotel on hotel.cityid=city.id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?> 
                
                    
                    
                   

            <div class="destination">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../images/destination-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#"><?php echo htmlentities($result->id);?></a></h3>
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
                    <span class="price"><?php echo htmlentities($result->cityname);?></span>
                                    <span><?php echo htmlentities($result->PricePerDay);?> /Day</span>
                  </div>
                </div>
                <p><?php echo htmlentities($result->ModelYear);?> Model</p>
                <p class="days"><span><?php echo htmlentities($result->SeatingCapacity);?> Seats</span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></span>
                  <span class="ml-auto"><a href="single-package.php?pid=<?php echo htmlentities($result->id);?>">Discover</a></span>
                </p>
              </div>
            </div><?php  }} ?>
          </div>
        </div>
      </div>
    </section>
-->





















<!--

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Hotel Packages</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">



          <div class="destination-slider owl-carousel  ftco-animate">
                    <?php $sql = "SELECT * from hotel";

        $query = $dbh -> prepare($sql);
        //$query -> bindParam(':city', $city, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {       ?>

            <div class="destination">
              <a href="index?o=Hotel" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
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
                    <span class="price">$<?php echo htmlentities($result->price);?></span>
                  </div>
                </div>
                <p><?php echo htmlentities($result->city);?></p>
                <p class="days"><span><?php echo htmlentities($result->country);?></span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> <?php echo substr(($result->description),0,3);?> </span>
                  <span class="ml-auto"><a href="hotel-single.php?pid=<?php echo htmlentities($result->id);?>">Discover</a></span>
                </p>
              </div>
            </div><?php  }} ?>
          </div>
        </div>
      </div>
    </section>





-->



<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>EA Safaris Login</h2>
      </header>
      <div class="w3-container">
        <p>Some text..</p>
        <p>Some text..</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>