<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="main.css">
      <link rel="stylesheet" type="text/css" href="imagine.css">
	<title>
		  Lucr_1 Dorian
	</title>
</head>
<body>
	
	<div class="main">
  		<div class="wrapper">
        <a class="back" href="index.html"> Back </a>
  			<div class="row">
  				<h2> Ex. 2 Data &#537;i ora <br>  </h2>
  				
  			</div>

  			<div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
            "La multi ani" <br>
            De elaborat un script ce va afisa numarul de zile ramase pana la ziua ta de nastere. In ziua de nastere va fi afisat un mesaj de felicitare <u>"La multi ani!"</u> si numarul de ani impliniti.

          </div>


  				<div class="text">
  					<h4> Scriptul elaborat. </h4>
  					<!--<img src="string_1.png" alt="" width="90%"> -->
            <img id="myImg" src="data_2.png" alt="Data si ora, Ex.2" width="95%" style="max-width:300; max-height:300px;">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
<script src="style.js"></script>
  				</div>

          <div class="text" >
            
          </style>
            <h4 class="titlu"> Rezultatul executiei scriptului.</h4>
            <?php

          $d1=strtotime("March 02");
      $d2=ceil(($d1-time())/60/60/24);
            $year1=1998;
                if ($d2<0)
                {
                     $year2=date("Y",strtotime("+1year"))-$year1;
                    $d2=365-abs($d2);
                   
                }else{
      
                    $year2=date("Y")-$year1;}
      echo "Au mai ramas " . $d2 ." de zile pana la ziua ta de nastere.<br> Implinesti ".$year2." de ani";

  ?>
          </div>

  				

          


  			</div>

  			<hr width="90%">


  		</div>



  	</div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html>