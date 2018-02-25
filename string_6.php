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
          <h2> Ex. 6 Stringuri <br>  </h2>
          
        </div>

        <div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
          Se consideră un şir de caractere S şi două caractere C1 şi C2. Să se verifice dacă numărul de apariţii ale caracterului C1 în S este egal cu numărul de apariţii ale caracterului C2 în S. 
           <br><br>   Exemplu: pentru sirul S= “aurul alb“ şi  C1=’a’, C2=’u’ se afiseaza “Da”. 


          </div>


          <div class="text">
            <h4> Scriptul elaborat. </h4>
            <!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_6.png" alt="Stringuri Ex.6" width="99%" style="max-width:300; max-height:300px;">
              
            </style>

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
      $s = "aurul alb";
    $c1='a';
    $c2='u';
    $a1=0;
    $a2=0;

    $n = strlen($s);

    for ($i=0; $i < $n; $i++) { 
      if ($s[$i]==$c1) {
        $a1++;
      }
      if ($s[$i]==$c2) {
        $a2++;
      }
    }

    if ($a1==$a2) {
      echo "Da!";
    } else echo "Nu!";
    
            ?>
          </div>

          

          


        </div>

        <hr width="90%">


      </div>



    </div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html> 