<?php 
	session_start();
	require_once "class/model.php";
	if (!isset($_SESSION['mySqlClass'])) 
		$_SESSION['mySqlClass'] = new MySQLTables();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="sven" >
    <link rel="icon" type="image/ico" href="favicon.ico">

	<title>Manser Truck AG</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/carousel.css" media="screen">
    <link rel="stylesheet" href="scss/style.css" media="screen">
    <link rel="stylesheet" href="css/clickdemo.css" media="screen">
    <!--link rel="stylesheet" href="css/print.css" media="print"-->

</head>
<body>
		<?php include "tmpl_header.html"; ?> 
            <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/actros-slt.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mercedes Actros SLT</h1>
              <p>Fancy Werbetexte erhöhen die Aufmerksamkeit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/actros.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mercedes Actros</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/antos.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mercedes Antos</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

        <section class="container content">
            <div class="body">
                <p class="title">Lucius Annaeus Seneca
                    <br>De vita beata</p>
                <h1>Glückselig Leben</h1>
                <hr>
                <h2>Buch I.</h2>
                <p>Glückselig zu leben, <a href="https://de.wikipedia.org/wiki/Lucius_Iunius_Gallio_Annaeanus">mein Bruder Gallio</a>, wünschen Alle, aber um zu durchschauen, was es sei, wodurch ein glückseliges Leben bewirkt werde, dazu sind sie zu blödsichtig. Und zu einem glückseligen Leben zu gelangen ist eine so gar nicht leichte Sache, daß Jeder sich um so weiter davon entfernt, je rascher er darauf losgeht, wenn er einmal den Weg verfehlt hat; denn führt dieser nach der entgegengesetzten Seite, so wird gerade die Eile der Grund einer immer größeren Entfernung. Man muß daher zuerst vor <a href="https://de.wikipedia.org/wiki/Auge">Augen</a> stellen, was es sei, worauf man sein Streben richtet; sodann hat man sich darnach umzusehen, auf welchem Wege man am schnellsten dazu gelangen könne, indem man schon auf dem Wege selbst, wenn er nur der rechte ist, einsehen wird, wie viel davon täglich zurückgelegt werde und um wie viel näher man dem Ziele gekommen sei, zu dem uns ein natürliches Verlangen hintreibt. (2.) So lange wir freilich überallhin herumschweifen, keinem Führer folgend, sondern dem verworrenen Gelärme und Geschrei der uns nach ganz verschiedenen Seiten hin Rufenden, wird unser so kurzes Leben unter [stetem] Irregehen verfließen, auch wenn wir uns Tag und Nacht um eine richtige Ansicht bemühen. Daher entscheide man sich, sowohl wohin man wolle, als auf welchem Wege, und nicht ohne einen kundigen [Führer], der das, worauf wir zuschreiten, [bereits] erforscht hat, weil hier nicht dasselbe Verhältniß Statt findet, <a href="https://de.wikipedia.org/wiki/Reise">wie bei den übrigen Reisen</a>. Bei jenen lassen uns ein Fußpfad, den man festhält, und Bewohner [der Gegend], die man befragt, nicht irren, hier aber täuscht gerade der betretenste und besuchteste Weg am meisten. (3.) Deshalb haben wir auf Nichts mehr zu achten, als daß wir nicht nach Art des Viehes der Schaar der Vorangehenden folgen, fortwandernd nicht, wo man gehen soll, sondern wo [von Andern] gegangen wird. Und doch verwickelt uns Nichts in größere Uebel, als daß wir uns nach dem Gerede der Leute richten, indem wir das für das Beste halten, was mit großer Zustimmung angenommen ist und wovon wir viele Beispiele haben, und daß wir nicht nach Vernunftgründen, sondern nach Beispielen leben: daher jene gewaltige Zusammenhäufung von Leuten, die Einer über den Andern hinfallen. (4.) Was bei einem großen Menschengedränge der Fall ist, wo das Volk sich selbst drückt, daß Niemand fällt, ohne noch einen Andern sich nachzuziehen und die Vordersten den Folgenden verderblich werden, das kannst du im ganzen Leben sich ereignen sehen: Niemand irrt nur für sich allein, sondern er ist auch Grund und Urheber fremden Irrthums. Denn es ist schädlich, sich den Vorangehenden anzuschließen; und während ein Jeder lieber glauben, als nachdenken will, so wird über das Leben nie nachgedacht; immer glaubt man nur [Andern], und ein von Hand zu Hand fortgepflanzter Irrthum lenkt uns und stürzt uns [in's Verderben]; durch fremde Beispiele gehen wir zu Grunde. 

                (5.) Wir werden geheilt werden, sobald wir uns nur vom großen Haufen absondern; so aber steht der Volkshaufe, der Vertheidiger seines eigenen Verderbens, der <a href="https://de.wikipedia.org/wiki/Vernunft">Vernunft</a> feindlich gegenüber.</p>
            </div>
        </section>
        
        <section  class="container content">
					<ul class="clickdemo">
						<li class="hot">Äpfel<span>0</span></li>
						<li class="hot">Birnen<span>0</span></li>
						<li class="hot">Erdbeeren<span>0</span></li>
						<li class="hot">Himbeeren<span>0</span></li>
					</ul>        
        
        </section>
        <footer class="content">
            <a href="http://www.google.com"><span class="topomed-google"></span></a>
            <a href="http://www.facebook.com"><span class="topomed-facebook"></span></a>
            <a href="http://wwww.twitter.com"><span class="topomed-twitter"></span></a>
            <a href="http://behance.com"><span class="topomed-behance"></span></a>
            <a href="http://github.io"><span class="topomed-github"></span></a>
            <a href="http://vimeo"><span class="topomed-vimeo"></span></a>
        </footer>

    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap_hover_dropdown.js"></script>
    <script type="text/javascript">
    	jQuery.noConflict();
    	(function($){
    		$('li.hot').on('click',function (ev) {
    			currentValue = $(this).find(">:first-child").text();
    			$(this).find(">:first-child").text(1+Number(currentValue));
    			//alert(ev);
    		});
    	})(jQuery);
    </script>
</body>
</html>
