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
  				<h2> Ex. 11 Stringuri <br>  </h2>
  				
  			</div>

  			<div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
Se consideră un text în care cuvintele sunt separate prin spaţiu, virgulă, punct, punct şi virgulă, semnul întrebării şi semnul exclamării. <br> Să se extragă toate cuvintele din text şi să se afişeze în ordinea crescătoare a lungimii. <br>Cuvintele de aceeaşi lungime vor fi ordonate alfabetic. 

          </div>


  				<div class="text">
  					<h4> Scriptul elaborat. </h4>
  					<!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_11.png" alt="Stringuri Ex.11" width="99%" style="max-width:300; max-height:300px;">

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

        $sir="alo, noroc! ce mai faci? cum.";
    $separ = " ,!?;.";
    $cuvant = strtok($sir, $separ);
    $i=0;

    while ($cuvant!==false) {
      $cuvinte[$i++]=$cuvant;
      echo "Cuv: $cuvant<br>";
      //$cuvinte[strlen($cuvant)]=$cuvant;
      //$cuvinte = [strlen($cuvant) => $cuvant];
      $cuvant = strtok($separ);
    }
    $n=$i;

    for ($i=0; $i < $n-1; $i++) { 
      for ($j=0; $j < $n-1-$i; $j++) { 
        if ( strlen($cuvinte[$j]) > strlen($cuvinte[$j+1]) ) {
          $temp=$cuvinte[$j];
          $cuvinte[$j] = $cuvinte[$j+1];
          $cuvinte[$j+1]= $temp;
        }
      }
    }
    echo "Sortare dupa lungime: ";
    for ($i=0; $i < $n; $i++) { 
      echo $cuvinte[$i]." ";
    }

    echo "<br> Sortare alfabetica:  ";

        for ($i=0; $i < $n-1; $i++) { 
      for ($j=0; $j < $n-1-$i; $j++) { 
        if ( $cuvinte[$j] > $cuvinte[$j+1] && strlen($cuvinte[$j]) == strlen($cuvinte[$j+1]) ) {
          $temp=$cuvinte[$j];
          $cuvinte[$j] = $cuvinte[$j+1];
          $cuvinte[$j+1]= $temp;
        }
      }
    }

    for ($i=0; $i < $n; $i++) { 
      echo $cuvinte[$i]." ";
    }
    
    
/*
    foreach ($arrayName as $key => $value) {
      echo "$key - $value<br>";
    }
*/
  ?>
          </div>

  				

          


  			</div>

  			<hr width="90%">


  		</div>



  	</div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html>