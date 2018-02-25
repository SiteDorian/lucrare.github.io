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
  				<h2> Ex. 3 Data &#537;i ora <br>  </h2>
  				
  			</div>

  			<div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
            "Salutare"<br>
            De elaborat un script ce va afisa un mesaj de salutare in dependenta de ora curenta.
            <br> Daca ora este intre 7:00 si 11:00 se va afisa mesajul <u>"Buna dimineata!"</u>, <br>intre 11:00 si 18:00 - <u> "Buna ziua!" </u>,<br> intre 18:00 si 22:00 - <u> "Buna seara!" </u>,<br> dupa ora 22:00 - <u> "Noapte buna!" </u>,<br> dupa miezul noptii - <u> "De ce nu dormi? Maine ai programarea WEB!" </u>

          </div>


  				<div class="text">
  					<h4> Scriptul elaborat. </h4>
  					<!--<img src="string_1.png" alt="" width="90%"> -->
            <img id="myImg" src="data_3.png" alt="Data si ora, Ex.3" width="95%" style="max-width:300; max-height:300px;">

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

      $ora=date("H");
      if($ora<7) echo "De ce nu dormi, miine ai Programarea Web!!";
      if ($ora>=7 && $ora<11)  echo "Buna dimineata!";
      if ($ora>=11 && $ora<18) echo "Buna ziua. Este ora ", $ora."!";
      if (18<=$ora && $ora<22) echo "Buna seara. Este ora ", $ora."!";
      if (22<=$ora) echo "Noapte buna. Este ora ", $ora."!";
      if (24<=$ora) echo "De ce nu dormi, miine ai Programarea Web! Este ora ", $ora.".";

             ?>
          </div>

  				

          


  			</div>

  			<hr width="90%">


  		</div>



  	</div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html>