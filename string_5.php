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
          <h2> Ex. 5 Stringuri <br>  </h2>
          
        </div>

        <div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
          Se consideră un şir de caractere format doar din litere. Să se determine procentul literelor mari din acest şir. 
            <br><br>  Exemplu: pentru sirul „euMERg” se afiseaza 50%. 


          </div>


          <div class="text">
            <h4> Scriptul elaborat. </h4>
            <!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_5.png" alt="Stringuri Ex.5" width="99%" style="max-width:300; max-height:300px;">

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
  
        $sir = "eaMERge";
    $n = strlen($sir);
    $mari = 0;
    for ($i=0; $i < $n; $i++) { 
      if ($sir[$i]>="A" && $sir[$i]<='Z') {
        $mari++;
      }
    }

    echo "Litere mari: ".($mari/$n*100)."%";


            ?>
          </div>

          

          


        </div>

        <hr width="90%">


      </div>



    </div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html> 