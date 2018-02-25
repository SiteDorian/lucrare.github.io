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
  				<h2> Ex. 14 Stringuri <br>  </h2>
  				
  			</div>

  			<div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
Şirul de caractere S conţine mai multe ecuaţii de gradul 1 cu coeficienţi întregi, separate prin virgulă. Elementele unei ecuaţii pot fi separate prin unul sau mai multe spaţii. Să se determine soluţia pentru fiecare ecuaţie. Se va utiliza o funcţie definită de utilizator, care să determine soluţia unei ecuaţii de gradul 1 dată prin specificarea coeficienţilor acesteia. <br> Pentru şirul S=”2x+4=0, x-2=0, -3x-6=0, 2=0, 0x+0=0” se va afişa: <br>
 
 <br>Ecuaţia 1 are soluţia: -2 
 <br>Ecuaţia 2 are soluţia: 2 
 <br>Ecuaţia 3 are soluţia: -2 
 <br>Ecuaţia 4 are soluţia: nu are soluţie 
 <br>Ecuaţia 5 are soluţia: x aparţine lui R

          </div>


  				<div class="text">
  					<h4> Scriptul elaborat. </h4>
  					<!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_14.png" alt="Stringuri Ex.14" width="99%" style="max-width:300; max-height:300px;">

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

            $sir="2x+4=0 x-2=0 -3x+6=0 0x+0=0";
    $separ = " ,;";
    $cuvant = strtok($sir, $separ);
    $i=0;

    while ($cuvant!==false) {
      $ecuatii[$i++]=$cuvant;
      echo "Ecuatia $i: $cuvant<br>";
      $cuvant = strtok($separ);
    }
    $n=$i;

    
    for ($i=0; $i < $n; $i++) { 
        echo "<br><br>Ecuatia ".($i+1)." <br>";
      $nr = strlen($ecuatii[$i]);

      for ($j=0; $j < $nr; $j++){
        if ($ecuatii[$i][$j]=='x'){
          $j+=1;
          switch($ecuatii[$i][$j]){
            case '+': $operator='+'; break;
            case '-': $operator='-'; break;
            default: $operator='q';
          }
          echo "<br>Operatorul gasit: $operator <br>";
          break;
        }

      }

      $separ="x+-/*=";
      $sir=$ecuatii[$i];

      $numar=strtok($sir, $separ); 
      if ($numar!==false){
        $a=$numar;
        $numar=strtok($separ); 
        if ($numar!==false){
          $b=$numar;
          $numar=strtok($separ); 
          if ($numar!==false){
            $c=$numar;
          } else {$c=$b; $b=$a; $a=1;}
        } 
      } 

      if ($ecuatii[$i][0]=='-') $a=-$a;

      echo "a=$a, b=$b, c=$c";

      if ($a==0){
        if ($b==0) echo "<br>Raspuns: S=R.";
      } else switch($operator){
            case '+': echo "<br>Raspuns: ".(-$b/$a); break;
            case '-': echo "<br>Raspuns: ".($b/$a); break;

            default: echo "Raspuns: Nu exista!";
          }
    } 
    
  ?>
          </div>

  				

          


  			</div>

  			<hr width="90%">


  		</div>



  	</div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html>