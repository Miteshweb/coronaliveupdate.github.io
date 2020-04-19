<html lang="en">
<head>
  <title>Go Corona</title>

  <?php  include 'link/link.php'; ?>

  <?php  include 'css/style.php'; ?>


  

</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3 navbar-dark">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler "   type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#symptoms">Syntoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#Prevention">Prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#wcoronalive">WorldCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="india.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daycorona.php">TodayIndiaCase</a>
      </li>
  
    </ul>
   
  </div>
</nav> 
<div class="container-fluid">
<div class="main_header">
	<div class="row w-100 h-100 ">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside d-flex justify-content-center align-items-center">
				<img src="img/eksath.png" width="300" height="300">
				
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 mt-5">
			<div  class="rightside d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="img/corona.png" width="100" height="100"></span>na Virus</h1>
				
			</div>
		</div>
		
	</div>
</div>
</div>
<!-- ///////////////corona letest update////////////////// -->
<section class="corona_update container-fluid" id="wcoronalive">
	<div class="my-5S">
		<h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>
	</div>

  <div class="table-responsive">

    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th>Country</th>
        <th>TotalConfirmed</th>
        <th>TotalRecovered</th>
        <th>TotalDeaths</th>
        <th>NewConfirmed</th>
        <th>NewRecovered</th>
        <th>NewDeaths</th>
      </tr>
    </table>
    
  </div>

</section>

<!-- ///////////////////////about/////////// -->
<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
    </div>
	
    <div class="row pt-5 ">
    	<div class="col-lg-6 col-md-6 col-12 mb-5 about_rs">
    		<img src="img/co1.jpg" width="300" height="">
    		
    	</div>

    	<div class=" col-lg-6 col-md-6 col-12">
    		<h2>What is COVID-19 (Corona Virus)</h2>
    		<p align="justify">Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.</p><p align="justify">
The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p><p align="justify">HOW IT SPREADS
Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth.</p>
    		
    	</div>
    	
    </div>
</div>

<!-- //////////////syntoms/////////////// -->

<div class="container-fluid  pt-5 pb-5 " id="symptoms">
	<div class="section_header text-center mb-5 mt-4">
		<h1>CoronaVirus Symptoms</h1>
    </div>

    <div class="container">
    	<div class="row text-center text-uppercase">
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<figure>
    				<img src="img/cough.jpg"  class="img-fluid" width="120" height="220"><figcaption>cough</figcaption>
    			</figure>
    			
    		</div>
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<figure>
    				<img src="img/runny nose.png" class="img-fluid" width="120" height="120"><figcaption>runny nose</figcaption>
    			</figure>
    			
    		</div>
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<figure>
    				<img src="img/fever.png" class="img-fluid" width="120" height="120"><figcaption>fever</figcaption>
    			</figure>
    			
    		</div>
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<figure>
    				<img src="img/cold.jpg" class="img-fluid" width="120" height="120"><figcaption>cold</figcaption>
    			</figure>
    			
    		</div>
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<figure>
    				<img src="img/tiredness.jpg" class="img-fluid" width="120" height="120"><figcaption>tiredness</figcaption>
    			</figure>
    			
    		</div>
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<figure>
    				<img src="img/brathing.png" class="img-fluid" width="120" height="120"><figcaption>difficulty brathing(sever cases)</figcaption>
    			</figure>
    			
    		</div>
    		
    	</div>

    	
    </div>
</div>

<!-- ///////////////////////about/////////// -->
<div class="container-fluid sub_section pt-5 pb-5 " id="Prevention">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
    </div>
    <div class="container">
    	<div class="row text-center">
    		<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure class="text-center">
    				        <img src="img/hand.webp" class="img-fluid" width="120" height="120">
    			        </figure>	
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p align="justify"><b>Hand whash:</b> Use alcohol-based handrub if you don't have immediate access to soap and water. How do I wash my hands properly? Washing your hands properly takes about ...</p>
    					
    				</div>

    				
    				
    			</div>

    		</div>

    			<div class="col-lg-4 col-md-4 col-12 mt-5">
    				<div class="row">
    					<div class="col-lg-4 col-md-4 col-12">
    					<figure>
    				        <img src="img/mask.jpg" class="img-fluid" width="120" height="90">
    			        </figure>	
    					</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p align="justify"align="justify"><b>Use Mask:</b> If you wear a mask, then you must know how to use it and dispose of it properly. When and how to wear medical masks to protect against coronavirus ...</p>
    					
    				</div>

    			</div>
	
    				
    			</div>

    			<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure>
    				        <img src="img/socil.jpg" class="img-fluid" width="120" height="90">
    			        </figure>	
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p align="justify"><b>Social Distance:</b> If you do have to be out and about, the World Health Organization recommends maintaining a distance of at least 1 metre between yourself...</p>
    					
    				</div>

    				</div>

    				
    			</div>

    			<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    					<div class="col-lg-4 col-md-4 col-12">
    					<figure>
    				        <img src="img/home.jpg" class="img-fluid" width="120" height="90">
    			        </figure>	
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p align="justify"><b>Stay Home Coronavirus:</b> 'Please stay at home'. Police use drones to enforce movement restrictions in Spain's fight against the coronavirus infection. On ...</p>
    					
    				</div>

    				</div>

    				
    			</div>

    			<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    					<div class="col-lg-4 col-md-4 col-12">
    					<figure>
    				        <img src="img/news.jpg" class="img-fluid" width="120" height="220">
    			        </figure>	
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p align="justify"><b>Watch NEWS:</b> Find the latest breaking news and information on the top stories, weather, business, entertainment, politics, and more...</p>
    					
    				</div>
    				
    				</div>

    			</div>

    			<div class="col-lg-4 col-md-4 col-12 mt-5">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-12">
    					<figure>
    				        <img src="img/contact.jpg" class="img-fluid" width="120" height="90">
    			        </figure>	
    				</div>
    				<div class="col-lg-8 col-md-8 col-12">
    					<p align="justify"><b>Contact Medical:</b> Avoiding close contact with people who are sick. ... systems; Individuals who have serious chronic medical conditions like: ... Health Care Provider: Patients who may have infection with this novel coronavirus should wear a ...</p>
    					
    				</div>

    				</div>

    				
    			</div>
    			
    		</div>
    		
    	
    	
    </div>
</div>


<!-- //////////////syntoms/////////////// -->

<!-- <div class="container-fluid  pt-5 pb-5 " id="contact">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Now</h1>
    </div> -->

    <!-- <div class="container">
    	<div class="row">
    		<div class="col-lg-8 offset-lg-2 col-12">
    			<form action="" method="POST" class="sub_section ">

    			<div class="form-group">
				    <label for="exampleFormControlInput1">Username</label>
				    <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Enter Your Name" required="">
				 </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Email address</label>
				    <input type="email" class="form-control" name="email" autocomplete="off" id="exampleFormControlInput1" placeholder="name@example.com">
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlInput1">Mobile</label>
				    <input type="number" class="form-control" name="mobile" autocomplete="off" placeholder="Enter Your Mobile" required="">
				 </div> 

				 <div class="form-group">
				 	<label> Select Symptoms</label><br>
				 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
				 		<label class="custom-control-label"  for="customcheckbox1">Cold</label>
				 	</div>

				 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
				 		<label class="custom-control-label"  for="customcheckbox2">Fever</label>
				 	</div>

				 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
				 		<label class="custom-control-label"  for="customcheckbox3">difficulty in breath</label>
				 	</div>

				 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
				 		<label class="custom-control-label"  for="customcheckbox4">Feeling Week</label>
				 	</div>


				 </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Example textarea</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" autocomplete="off" name="messege" rows="3"></textarea>
				  </div>

				  <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
              </form>

         
            


    		</div>
    		
    	</div>
    	
    </div>
</div> -->



            <div class="scrolltop float-right">
				<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
				
			</div>
<!-- ?????????????????????????footer????????????????????? --> 
<footer class="mt-5">
     <div class="footer_style text-white text-center container-fluid">
     	<p>  Copyright By Mitesh Rathva</p>
     </div>
</footer>

	<script >
		




	
		mybutton = document.getElementById("myBtn");
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			 mybutton.style.display = "block";
		}
		else{
			mybutton.style.display = "none";
		}
		}
		function topFunction()
		{
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}


    function fetch(){
      $.get("https://api.covid19api.com/summary",

        function(data){
          // console.log(data['Countries'].length);

          var tbval= document.getElementById('tbval');

          for (var i=1; i <(data['Countries'].length); i++) {

                  var x = tbval.insertRow();

                  x.insertCell(0);

                  tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];

                  tbval.rows[i].cells[0].style.background='#7a4a91';
                  tbval.rows[i].cells[0].style.color='#fff';

                  x.insertCell(1);
                  tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                  tbval.rows[i].cells[1].style.background='#4bb7d8';

                  x.insertCell(2);
                  tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                  tbval.rows[i].cells[2].style.background='#F5CCF6';

                   x.insertCell(3);
                  tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                  tbval.rows[i].cells[3].style.background='#CDEEE7';

                   x.insertCell(4);
                  tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                  tbval.rows[i].cells[4].style.background='#4bb7d8';

                   x.insertCell(5);
                  tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                  tbval.rows[i].cells[5].style.background='#F5CCF6';

                   x.insertCell(6);
                  tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                  tbval.rows[i].cells[6].style.background='#CDEEE7';


              }
             

            }

        );
    }
	</script>

</body>
</html>


  <?php

    // include 'dbconn.php';

      if (isset($_POST['subm'])){

      $username=$_POST['username'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $symp=$_POST['coronasym'];
      $msg=$_POST['messege'];

      $chk ="";

      foreach($symp  as  $chk1){

      $chk .= $chk1.",";

      }

      // $insertquery= " INSERT INTO coronacase( username, email, mobile, symp, messege) VALUES ('$username','$email','$mobile','$chk','$msg')";

      $query = mysqli_query( $con , $insertquery);

      if ($con) {
              	?>
              	<script >
              		alert("inset ok");
              	</script>
              	<?php
              }else{
              	?>
              	<script >
              		alert(" No inset ");
              	</script>
              	<?php

}
  
  }

   ?>			

    				