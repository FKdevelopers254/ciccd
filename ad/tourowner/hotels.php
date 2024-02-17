<div  style="background-image: url('images/bg_1.jpg'); width:100%; height:80px;"></div>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar ftco-animate">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find Hotel</h3>
        			<h9>Results Found  <?php echo $_SESSION['results']; ?></h9>
                
        			<form autocomplete="off" method="post" action="index?o=Hotels">
        				<div class="fields">
		             
                            
                              <div class="autocomplete form-group" >
    <input class="form-control" id="myInput" type="text" name="search" placeholder="Hotel Name or City">
  </div>
   

                             

		            
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		             <!-- <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>-->
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
                    
                           
                    
                    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

         
                        
                         
/*An array containing all the country names in the world:*/
var countries = ["GET", "gethotel.php"];
                        
	                    
                        
  var hotel = <?php include ('gethotel.php')?>;                     

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), hotel);
</script>
                
                
                    





   <!--<form method="post" action="index?o=Hotels">
 
  <input type="text" name="search" required/>
  <input type="submit" value="Search" class="btn btn-primary py-3 px-5"/>
</form> --> 

        		</div>
        	
          </div>




<?php include('hotelsearch.php'); ?>




          <div class="col-lg-9">
          	<div class="row">


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


          		<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="index?o=Hotel&pid=<?php echo htmlentities($result->id);?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
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
			    							<span class="price">$<?php echo htmlentities($result->price);?></span>
		    							</div>
		    							
		    						</div>
		    						<p><?php echo substr(($result->description),0,30);?> </p>
		    						<p class="days"><span><?php echo substr(($result->description),0,30);?></span></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i><?php echo htmlentities($result->city);?>,<?php echo htmlentities($result->country);?></span> 
		    							<span class="ml-auto"><a href="index?o=Hotel&pid=<?php echo htmlentities($result->id);?>">Discover</a></span>
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
























        	