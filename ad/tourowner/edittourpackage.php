          <?php
error_reporting(0);
include_once('confi.php');
if(strlen($_SESSION['user_id'])==0)
	{
header('location:index.php');
}
else{
$p=intval($_GET['p']);
if(isset($_POST['submit']))
{
   
$packagename=$_POST['packagename'];
$kes=$_POST['kes'];
    	$usd=$_POST['usd'];
    $nights=$_POST['nights'];
     $days=$_POST['days'];
     $description=$_POST['description'];
    

$sql="update tourpackages set  packagename=:packagename,kes=:kes,usd=:usd,nights=:nights, days=:days, description=:description where id=:p";

$query = $DB->prepare($sql);

$query->bindParam(':packagename',$packagename,PDO::PARAM_STR);
    $query->bindParam(':kes',$kes,PDO::PARAM_STR);

$query->bindParam(':usd',$usd,PDO::PARAM_STR);
    $query->bindParam(':nights',$nights,PDO::PARAM_STR);
    
    $query->bindParam(':days',$days,PDO::PARAM_STR);
    
    $query->bindParam(':description',$description,PDO::PARAM_STR);
     

    $query->bindParam(':p',$p,PDO::PARAM_STR);
$query->execute();
$msg="Package Updated Successfully";
}
    
    
    
     if(isset($_POST['delete']))
    {
        
        	$sql = "DELETE FROM tourpackages WHERE id = :p";
$query = $DB->prepare($sql);
  $query->bindParam(':p',$p,PDO::PARAM_STR);
$query->execute();


	header('Location: index.php?o=AP');
        $msg="Sermon Deleted Successfully";
    }

	?>


<div  style="background-image: url('../../images/bg_1.jpg'); width:100%; height:80px;"></div>















 <section class="ftco-section ftco-degree-bg">
         <div class="container">
             <div class="row">
                        <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Find City</h3>
                    <form action="#">
                        <div class="fields">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Destination, City">
                      </div>
                      <div class="form-group">
                        <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control" placeholder="Keyword search">
                          <option value="">Select Location</option>
                          <option value="">San Francisco USA</option>
                          <option value="">Berlin Germany</option>
                          <option value="">Lodon United Kingdom</option>
                          <option value="">Paris Italy</option>
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
                                            <input type="number" value="25000" min="0" max="120000"/>   -
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
                </div>
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Star Rating</h3>
                    <form method="post" class="star-rating">
                              <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">
                                        <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                                    </label>
                              </div>
                              <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">
                                   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                              </label>
                              </div>
                              <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                             </label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                              </label>
                              </div>
                              <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                                </label>
                              </div>
                            </form>
                </div>
             </div>
             
             
             <div class="col-lg-9">
                <div class="row">
                   
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(../../images/hotel-2.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(../../images/hotel-3.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(../../images/hotel-4.jpg);"></div>
                            </div>
                        </div>
                    </div>   
                      <?php
$sql = "SELECT * FROM tourpackages WHERE id =:p";
$query = $DB -> prepare($sql);
$query -> bindParam(':p', $p, PDO::PARAM_STR);

$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate"> <p class="rate mb-5">
                            <span class="loc"><a href="#"><i class="icon-map"></i> <?php echo htmlentities($result->city);?>,<?php echo htmlentities($result->country);?></a></span>
                            <span class="star">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                8 Rating</span>
                            </p>
                        
                         <form autocomplete="off" method="post" >
  
		            
                             <span> <strong>Tour Package Title</strong></span>
                        
                         <input class="form-control"  type="text" name="packagename" value="<?php echo htmlentities($result->packagename);?>" required>
                        <br>  
                        
                        <span> <strong>Residents Price in KES</strong></span>
                        
                         <input class="form-control"  type="number" name="kes" value="<?php echo htmlentities($result->kes);?>" required>
                        <br> 
                        <span> <strong>Non Residents Price in USD</strong></span>
                        
                         <input class="form-control"  type="number" name="usd" value="<?php echo htmlentities($result->usd);?>" required>
                        <br>
                         <span> <strong>Number of Nights</strong></span>
                        
                         <input class="form-control"  type="number" name="nights" value="<?php echo htmlentities($result->nights);?>" required>
                        <br>
                         <span> <strong>Number of Days</strong></span>
                        
                         <input class="form-control"  type="number" name="days" value="<?php echo htmlentities($result->days);?>" required>
                        <br>
                         <span> <strong>Country</strong></span>
                        
                         <input class="form-control"  type="text" name="countryid" value="<?php echo htmlentities($result->countryid);?>" required>
                        <br>
                         <span> <strong>City</strong></span>
                        
                         <input class="form-control"  type="text" name="cityid" value="<?php echo htmlentities($result->cityid);?>" required>
                        <br>
                           <span> <strong>Itinerary</strong></span>   

                        <textarea rows="25" class="form-control"  type="text" name="description"  required><?php echo htmlentities($result->description);?></textarea>
                             
                             
                               <div class="form-group">
		                <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">
		              </div>
                               <button type="submit" class="btn btn-danger" name="delete">Delete</button>
		          
	            </form>
                 
                    </div>
                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Take A Tour</h4>
                        <div class="block-16">
                      <figure>
                        <img src="../images/hotel-6.jpg" alt="Image placeholder" class="img-fluid">
                        <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                      </figure>
                    </div>
                    </div>
                    
                    
                    
                    
                 

  <?php }} ?>
        <!--            <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Our Rooms</h4>
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(../images/room-4.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
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
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-5.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
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
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-6.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
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
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div> -->
                    
                 </div></div>   
     </div></div>   </section>







    
    
    
     <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
    
    
    
    
    
    
    
   

  <?php } ?>