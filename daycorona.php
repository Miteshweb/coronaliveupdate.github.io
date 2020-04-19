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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php#symptoms">Syntoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php#Prevention">Prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php#wcoronalive">WorldCoronaLive</a>
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


<section class="corona_update container-fluid" id="">
  <div class="my-5">
    <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF THE INDIA Day Wise</h3>
  </div>

  <div class="table-responsive">

    <table class="table  text-center" id="tbl">

    	<?php

		$data = file_get_contents('https://api.covid19india.org/data.json');

		$coronadata = json_decode($data, true);

		// echo "<pre>";
		// print_r($$totalstates);


		$totalcount =  count($coronadata['cases_time_series']);

		// echo $daywise['cases_time_series'][0]['totalconfirmed'];

		$i=0;
		while ($i < $totalcount) {

			?>


		<tr>
			<th class="text-left" colspan="6">Date & Month</th>
		</tr>
		<tr>
			<td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date'] ."<br>"; ?></td>
		</tr>
		<tr class="text-capitalize text-white">
			<th style="color: #fff; background: #2196f3;">total confirmed</th>
			<th style="color: #fff; background: #2196f3;">daily confirmed</th>
			<th style="color: #fff; background: #2196f3;">daily recovered</th>
			<th style="color: #fff; background: #2196f3;">daily deceased</th>
			<th style="color: #fff; background: #2196f3;">total recovered</th>
			<th style="color: #fff; background: #2196f3;">total deceased</th>
			
		</tr>
		<tr class="mb-5">
			<td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed'] ."<br>"; ?></td>
			<td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed'] ."<br>"; ?></td>
			<td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered'] ."<br>"; ?></td>
			<td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased'] ."<br>"; ?></td>
			<td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered'] ."<br>"; ?></td>
			<td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased'] ."<br>"; ?></td>
			
		</tr>

		<?php
		$i++;
	}



		?>

    </table>
    
  </div>

</section>


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


  </script>

</body>
</html>














