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
          <h2> Ex. 10 Stringuri <br>  </h2>
          
        </div>

        <div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
          Şirul de caractere Adrese conţine o listă de adrese e-mail separate prin virgulă, unele adrese putându-se repeta. <br> O adresă e-mail are forma: <u>nume_utilizator@nume_server.</u> <br> Să se determine numele serverului e-mail ce găzduieşte cele mai multe conturi e-mail. 

          </div>


          <div class="text">
            <h4> Scriptul elaborat. </h4>
            <!--<img src="string_1.png" alt="" width="98%"> -->
            <img id="myImg" src="string_10.png" alt="Stringuri, Ex.10" width="99%" style="max-width:300; max-height:300px;">

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
  $adrese = "anatol@mail.ru, basta@gmail.com, anatol12@mail.ru";

    $separ = " ,;";
    $cuvant = strtok($adrese, $separ);
    $i=0;

    while ($cuvant!==false) {
      $adresa[$i++]=$cuvant;
      echo "Adresa $i: $cuvant<br>";
      $cuvant = strtok($separ);
    }
    $n=$i;
    $mail=0; $yandex=0; $gmail=0;

    for ($i=0; $i < $n; $i++) { 
      $utilizator = strtok($adresa[$i],'@');
      $server = strtok('@');
      switch ($server) {
        case 'mail.ru':
          $mail++;
          break;

        case 'yandex.ru':
          $yandex++;
          break;

        case 'gmail.com':
          $gmail++;
          break;
        
        default:
          # code...
          break;
      }
    }
    if ($mail>$yandex && $mail>=$gmail) {
        echo "Serverul folosit cel mai des este mail.ru, avand ".$mail."  utilizatori.";
      }
      else if ($yandex>$mail && $yandex>$gmail) {
        echo "Serverul folosit cel mai des este yandex.ru, avand ".$yandex."  utilizatori.";
      } else echo "Serverul folosit cel mai des este gmail.com, avand ".$gmail."  utilizatori.";
    
            ?>
          </div>

          

          


        </div>

        <hr width="90%">


      </div>



    </div>


<script type="text/javascript" src="imagine.js"></script>

</body>
</html> 