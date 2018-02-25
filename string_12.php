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
  				<h2> Ex. 12 Stringuri <br>  </h2>
  				
  			</div>

  			<div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
Salariile obţinute de către angajaţii unei firme sunt memorate într-un tablou asociativ în care elementele au drept cheie numele unui angajat, iar ca valoare suma primită ca indemnizaţie. <br> Să se determine salariul minim, salariul maxim, lista angajaţilor care primesc salariul cel mai mic, precum şi lista angajaţilor care primesc suma cea mai mare.

          </div>


  				<div class="text">
  					<h4> Scriptul elaborat. </h4>
  					<!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_12.png" alt="Stringuri Ex.12" width="99%" style="max-width:300; max-height:300px;">

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
            <h4> Rezultatul executiei scriptului.</h4>
            <?php
    $arrayName = array(
      "Burcovschi" => 100, 
      "Cazacu" => 99,
      "Lucasco" => 2500,
      "Istrati" => 13
    );

    foreach ($arrayName as $key => $value) {
      echo "Numele: $key, Salariul: $value <br>";
    }

    

    $minim= $arrayName['Burcovschi'];
    $maxim= $arrayName['Burcovschi'];

    foreach ($arrayName as $key => $value) {
      if ($value < $minim) {
        $minim=$value;
      }

      if ($value > $maxim) {
        $maxim = $value;
      }
    }

    echo "<br><br>Salariul maxim: $maxim<br>Salariul minim: $minim;";
    
  ?>
          </div>

  				

          


  			</div>

  			<hr width="90%">


  		</div>



  	</div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html>