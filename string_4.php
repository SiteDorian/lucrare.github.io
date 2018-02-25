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
          <h2> Ex. 4 Stringuri <br>  </h2>
          
        </div>

        <div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
          Se consideră un şir de caractere. Să se determine poziţia ultimului caracter cifră din acest text. 
           <br><br>   Exemplu: pentru sirul  “2+3 fac cinci” se afiseaza 2.  


          </div>


          <div class="text">
            <h4> Scriptul elaborat. </h4>
            <!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_4.png" alt="Stringuri Ex.4" width="99%" style="max-width:300; max-height:300px;">

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

          <div class="text">
            <h4> Rezultatul executiei scriptului.</h4>
            <?php
      $sir = "2 + 3 fac cinci";

    $n = strlen($sir);

    for ($i=0; $i < $n; $i++) { 
      switch ( $sir[$i]) {
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
          $poz = $i;

          break;
          goto p1;
        }
    }
p1:
    echo "Pozitia: ".$poz;
    
            ?>
          </div>

          

          


        </div>

        <hr width="90%">


      </div>



    </div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html> 