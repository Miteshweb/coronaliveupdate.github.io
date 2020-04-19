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
    <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF THE INDIA</h3>
  </div>

  <div class="table-responsive">

    <table class="table table-bordered table-striped text-center">
      <tr>
        <th>Lastupdatetime</th>
        <th>State</th>
        <th>Confirmed</th>
        <th>Active</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>

<?php

     $data = file_get_contents('https://api.covid19india.org/data.json');

     $coronalive = json_decode($data,  true);

     $Statescount = count($coronalive['statewise']);

     $i=1;
     while($i <  $Statescount){

      ?>
      <tr>
        <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']   ?></td>
        <td><?php echo $coronalive['statewise'][$i]['state']   ?></td>
        <td><?php echo $coronalive['statewise'][$i]['confirmed']   ?></td>
        <td><?php echo $coronalive['statewise'][$i]['active']   ?></td>
        <td><?php echo $coronalive['statewise'][$i]['recovered']   ?></td>
        <td><?php echo $coronalive['statewise'][$i]['deaths']   ?></td>
      </tr>

      <?php
      $i++;
     }

     // echo "<pre>";
     // print_r($coronalive);

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


    // function fetch(){
    //   $.get("https://api.covid19api.com/summary",

    //     function(data){
    //       // console.log(data['Countries'].length);

    //       var tbval= document.getElementById('tbval');

    //       for (var i=1; i <(data['Countries'].length); i++) {

    //               var x = tbval.insertRow();

    //               x.insertCell(0);

    //               tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];

    //               tbval.rows[i].cells[0].style.background='#7a4a91';
    //               tbval.rows[i].cells[0].style.color='#fff';

    //               x.insertCell(1);
    //               tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
    //               tbval.rows[i].cells[1].style.background='#4bb7d8';

    //               x.insertCell(2);
    //               tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
    //               tbval.rows[i].cells[2].style.background='#F5CCF6';

    //                x.insertCell(3);
    //               tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
    //               tbval.rows[i].cells[3].style.background='#CDEEE7';

    //                x.insertCell(4);
    //               tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
    //               tbval.rows[i].cells[4].style.background='#4bb7d8';

    //                x.insertCell(5);
    //               tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
    //               tbval.rows[i].cells[5].style.background='#F5CCF6';

    //                x.insertCell(6);
    //               tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
    //               tbval.rows[i].cells[6].style.background='#CDEEE7';


    //           }
             

    //         }

    //     );
    // }
  </script>

</body>
</html>
