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
          <h2> Ex. 7 Stringuri <br>  </h2>
          
        </div>

        <div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
          Fie Text un şir de caractere, care conţine litere din alfabetul englez, spaţii şi semne ortografice şi de punctuaţie. <br>Se consideră  şi numărul natural K, 1<=K<=20. <br>Şirul va fi criptat după următorul algoritm: fiecare caracter literă va fi înlocuit cu caracterul aflat peste K poziţii în codul ASCII. <br>Scrieţi funcţii pentru criptarea şi decriptarea unui text folosind algoritmul de mai sus.

          </div>


          <div class="text">
            <h4> Scriptul elaborat. </h4>
            <!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_7.png" alt="Stringuri Ex.7" width="99%" style="max-width:300; max-height:300px;">

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
      $sir = "acasa";
    $k=1;

    function criptare($s, $k){
      $n = strlen($s);
      for ($i=0; $i < $n; $i++) { 
        $s[$i]= chr(ord($s[$i])+$k);
        
      }

      return $s;
    }

    echo "Sirul dupa criptare: ".criptare($sir, $k);
    
            ?>
          </div>

          

          


        </div>

        <hr width="90%">


      </div>



    </div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html> 