<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$title?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
  </head>
  <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="img/logo-header.png" style="margin:33px auto;">
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
          <div class="banner">
              <ul>
                  <li><div class="slider slide1"></div></li>
                  <li><div class="slider slide1"></div></li>
                  <li><div class="slider slide1"></div></li>
              </ul>
          </div>
    

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="section-divider text-center"></p>
          <h2 class="text-center">Conheça o casal</h2>
        </div>          
      </div>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4 text-center">
          <img src="img/profile-cami.jpg">
          <h3 class="text-center">Camila Bouza</h3>
          <p><?=$camisay?></p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 text-center">
          <img src="img/profile-baeta.jpg">
          <h3 class="text-center">Filipe Baeta</h3>
          <p><?=$baetasay?></p>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron text-center countdown">

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="section-divider text-center"></p>
          <h2 class="text-center">Madrinhas e Padrinhos</h2>
        </div> 
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <h4><?=$barbra->name?></h4>
              <h4 class="subtitle cami"><?=$barbra->team?></h4>
              <p><?=$barbra->description?></p>
            </div>
            <div class="col-sm-6 text-center">
              <div class="people-top cami"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom cami"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-center">
              <div class="people-top baeta"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom baeta"></div>
            </div>
            <div class="col-sm-6">
              <h4><?=$aline->name?></h4>
              <h4 class="subtitle baeta"><?=$aline->team?></h4>
              <p><?=$aline->description?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <h4><?=$germana->name?></h4>
              <h4 class="subtitle cami"><?=$germana->team?></h4>
              <p><?=$germana->description?></p>
            </div>
            <div class="col-sm-6 text-center">
              <div class="people-top cami"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom cami"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-center">
              <div class="people-top baeta"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom baeta"></div>
            </div>
            <div class="col-sm-6">
              <h4><?=$debora->name?></h4>
              <h4 class="subtitle baeta"><?=$debora->team?></h4>
              <p><?=$debora->description?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <h4><?=$paola->name?></h4>
              <h4 class="subtitle cami"><?=$paola->team?></h4>
              <p><?=$paola->description?></p>
            </div>
            <div class="col-sm-6 text-center">
              <div class="people-top cami"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom cami"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-center">
              <div class="people-top baeta"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom baeta"></div>
            </div>
            <div class="col-sm-6">
              <h4><?=$luiz->name?></h4>
              <h4 class="subtitle baeta"><?=$luiz->team?></h4>
              <p><?=$luiz->description?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <h4><?=$patrick->name?></h4>
              <h4 class="subtitle cami"><?=$patrick->team?></h4>
              <p><?=$patrick->description?></p>
            </div>
            <div class="col-sm-6 text-center">
              <div class="people-top cami"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom cami"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 text-center">
              <div class="people-top baeta"></div>
              <img class="people" src="http://placehold.it/200x200">
              <div class="people-bottom baeta"></div>
            </div>
            <div class="col-sm-6">
              <h4><?=$rafael->name?></h4>
              <h4 class="subtitle baeta"><?=$rafael->team?></h4>
              <p><?=$rafael->description?></p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div id="map-canvas"></div>  
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <img class="gallery" src="#">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12 friendsay text-center">
          <h1>O que os amigos dizem...</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 rsvp text-center">
          <h1>RSVP</h1>
        </div>
      </div>

    </div>

    <div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/unslider.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="//use.typekit.net/ucu8krg.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="js/page.js"></script>
  </body>
</html>