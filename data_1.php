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
  				<h2> Ex. 1 Data &#537;i ora <br>  </h2>
  				
  			</div>

  			<div class="row">

          <div class="text">
            <h4>Enuntul problemei.</h4>
            "Data livrarii" <br>
            De elaborat scriptul ce va afisa data livrarii produsului comandat. Daca produsul este comandat pana la ora 12:00, atunci produsul este livrat in aceeasi zi, daca comanda s-a efectuat dupa ora 12:00, produsul va fi livrat in ziua urmatoare.
            <br> In cazul in care comanda a fost efectuata in zilele de weekend sau de sarbatori (cum ar fi 1 ianuarie, 8 martie, etc.), produsul va fi livrat in prima zi lucratoare.
            <br><br> Zilele de sarbatori vor fi inregistrate intr-un array.

          </div>


  				<div class="text">
  					<h4> Scriptul elaborat. </h4>
  					<!--<img src="string_1.png" alt="" width="90%"> -->
            <img id="myImg" src="data_1.png" alt="Data si ora, Ex.1" width="95%" style="max-width:300; max-height:300px;">

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

      $val=false;
      $a=array("2017-03-08","2017-12-31","2018-01-07","2018-01-01");
      $ora=date("H"); echo "Ora curenta: ".($ora+1)."<br>";
      $ora+=1;
            for($i=0;$i<count($a);$i++) {if(date("Y-m-d")==$a[$i]) $val=true;}

      if ( ($ora<12) && (date("l")!="Sunday") && (date("l")!="Saturday") && ($val==false))
            {echo "Produsul va fi livrat astazi!! ", date("Y-m-d");}
                else if ( ($ora>=12) && (date("l")!="Sunday") && (date("l")!="Saturday") && ($val==false))
                         {
                             echo "Produsul va fi livrat miine! ", date("Y-m-d", strtotime("+1 day"));
                         }

      if (date("l")=="Saturday" || date("l")=="Sunday" || (date("l")=="Friday" && 8<=$ora && $ora<12)){
        $d=strtotime("Next Monday");
        if ($val==false){
        echo "Produsul va fi livrat pe data de ", date("Y-m-d",$d);}
        else{
          $d=strtotime("Next Day");
        echo "Produsul va fi livrat pe data de ", date("Y-m-d",$d);}
               
          
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