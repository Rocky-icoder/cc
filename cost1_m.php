
<?php
$ai=$_GET["ai"];
$v=$_GET["v"];
$a=$_GET["a"];
$hc=$_GET["hc"];
$vc=$_GET["vc"];
$ain=$_GET["ain"];


$ca=1-((6)*($v**0.67)/$a);
$cc=1-(1/(($hc+1)**0.5));

$x=$ai+($ca*0.3)+($cc*0.8);

$m=0.63*($vc**0.33);

$f=2718*($m+(2.3*$x)+(4.8*$ain)+(0.74));







?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    body{ background-color:black;
    }
    
    .container{ width:90%;
                text-align:center;
                padding:30px;
                margin-top:30px;
                background-color: #68b9bb;
    }
    
    .container1{ width:100%;
                text-align:center;
                margin-top:10px;
    }
    
     .container2{ width:90%;
                border:2px solid r;
                margin:auto;
                padding:5px;
                }
                
    .b1{width:30%;
        border:4px solid black;
        border-radius:10px;
        color:black;
        background-color:#a2e095;
    }
    
    .display-4 {
    font-size: 2.3rem;
    font-weight: 300;
    line-height: 1.2;
}



.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #bdcede;
    border-radius: 2.3rem;
    }

    </style>
    
   
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><div>
     <a><img src="https://shivajilaware.files.wordpress.com/2020/05/picsart_05-29-10.48.32.png?w=750"width="50px"height="50px" alt="CSGO Howl" style="float:left";> </a>
  <a class="navbar-brand ml-2" href="homepagemarathi.html"><b> <b> HelpCasting</b> </b> </a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepagemarathi.html">मुख्य पृष्ठ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutm.html">आमच्या विषयी</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Casting Design
        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="riser_marathi.html">Riser(रासझर)</a>
      <a class="dropdown-item" href="ingate_marathi.html">Ingate(इनगेट)</a>
      <a class="dropdown-item" href="s1_marathi.html">Spure(स्पृ)</a>
      <a class="dropdown-item" href="time1_marathi.html">Pouring Time(ओतण्याचा वेळ)</a>
      <a class="dropdown-item" href="time2_marathi.html">Solidification Time(घन होण्यासाठी लागणारा वेळ)</a>
      

         
      </li>
      <li class="nav-item">
        <a class="nav-link " href="main_marathi.html" >Casting Videos</a>
      </li>
    </ul>
   
  </div>
</nav>
    </div>
  
<div class="container2">
<div class="jumbotron">
  <h1 class="display-4">Tooling cost estimation!</h1>
  
  <p>Toolong cost is Rs <?php echo(round($f,0));?>
  <a class="btn btn-primary btn-lg" href="cost1_m.html" role="button">Calculate Again</a>
</div>
</div>





  