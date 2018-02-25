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
  				<h2> Ex. 1 Stringuri <br>  </h2>
  				
  			</div>

  			<div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
            Se consideră un şir de caractere. Să se determine raportul dintre numărul vocalelor şi numarul cifrelor din şir. 
               <br><br> Exemplu: pentru sirul “Ionel are 10 lei noi” raportul este 4. 

          </div>


  				<div class="text">
  					<h4> Scriptul elaborat. </h4>
  					<!--<img src="string_1.png" alt="" width="90%"> -->
            <img id="myImg" src="string_1.png" alt="Stringuri Ex.1" width="95%" style="max-width:300; max-height:300px;">

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
    $sir = "Ionel are 10 lei noi";
    $n = strlen($sir);

    $vocale = 0;
    $cifre = 0;

    for ($i=0; $i < $n; $i++) { 
      switch ( $sir[$i]) {
        case 'a':
        case 'A':
        case 'e':
        case 'E':
        case 'i':
        case 'I':
        case 'u':
        case 'U':
        case 'o':
        case 'O':
            $vocale+=1;
          break;
        
        case '0':
        case '1':
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
        case '7':
        case '8':
        case '9': 
          $cifre+=1;

          break;
        }
    }

    echo "Vocale: ".$vocale."<br>";
    echo "Cifre: ".$cifre."<br>";

if ($cifre!=0) {
  echo "Raportul: ".($vocale/$cifre);
} else echo "Sirul nu contine nici o cifra";
    
  ?>
          </div>

  				

          


  			</div>

  			<hr width="90%">


  		</div>



  	</div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html>