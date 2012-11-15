<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <?php

$link = mysql_connect("mysql3.ph-hos.osemka.pl", "1352208389_f", "1Bond007")
    or die("Problemy z bazą danych, odśwież stronę kilkukrotnie, powinno pomóc<br /> Admin");
mysql_query('SET NAMES utf8');
mysql_select_db("1206275_trails")
    or die("Could not select database");

$query1  = "SELECT Trasy.Kolor, Kolory.Kolor FROM Trasy, Kolory WHERE Trasy.ID=1 AND Kolory.ID=Trasy.Kolor";
$result1 = mysql_query($query1)
    or die("Query1 failed");
while ($row = mysql_fetch_array($result1)) 
	$title= $row["Kolor"];  	 
	print ("<title>$title</title>");
  
echo '  
  <link rel="stylesheet" type="text/css" href="style.css" />   

 </head>

<div id="wrapper">

    <div id="logo">

    </div>

    

        <div id="menu">
			        <ul>
      <li><a href="http://www.kondzios230.bikestats.pl"> 
      Główna
      <span></span></a></li>
      <li><a href="http://www.bikestats.pl/rowery/Roman_6645_10291.html"> 
      Rower
      <span></span></a></li>
      <li><a href="http://www.bikestats.pl/">
			Bikestats
      <span></span></a></li>
      <li><a href="http://kondzios230.bikestats.pl/index.php?category=15244">
      Sprzęt			<span></span></a></li>
      <li><a href="http://kondzios230.bikestats.pl/index.php?category=15245">
      Teren
			<span></span></a></li>
      <li><a href="http://kondzios230.bikestats.pl/index.php?category=15247">
      Asfalty
			<span></span></a></li>
       
         </ul>

        

        </div>

            <div id="right">

       ...     
                                                    
        </div>          
  
            <div id="main">
	<div id="data">
		 <div id="through">
		  ABC<br />ADDA
		 </div>
		  			
	 <h1>Zielony szlak</h1>
     <h2>Kozia Góra - Beskid Śląski</h2>
     6 km <br />
     100 m  <img src="Grafiki/pion.png"/> <br />
     
      <div id="trudn">
	   <h1>Trudność:</h1>
       7<sup>/10</sup>
      </div>
      
      <div id="fun">
       <h1>Fun:</h1>
       8<sup>/10</sup>
      </div>
      
       
    
		<iframe src="http://osm.trail.pl/embed?ll=19.053125381469727%2C+49.779878500562425&amp;l1=Zielony+szlak&amp;l2=Bielsko-Bia%C5%82a+-+Kozia+G%C3%B3ra&amp;l3=Beskid+%C5%9Al%C4%85ski&amp;w=400&amp;h=400&amp;z=14&amp;m=1" frameborder="0" width="400" height="400"></iframe>
		</div>
			<div id="opis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor risus. Nam pulvinar, dolor non posuere tincidunt, augue tellus facilisis justo, quis posuere nulla orci quis elit. Nam vestibulum, lectus et scelerisque commodo, lacus neque convallis nibh, nec lobortis ligula odio at tortor. Morbi et dignissim metus. Fusce nec metus elit, at vehicula nisl. Donec nec accumsan risus. Mauris egestas fringilla orci vitae varius. Mauris ultrices mattis ultrices. Proin dapibus dolor eu tortor tristique ut porttitor eros pellentesque. Aenean leo urna, mollis vel consectetur sit amet, venenatis id sapien. Vivamus auctor facilisis orci nec molestie. Suspendisse potenti.

Etiam commodo quam non ligula pharetra pellentesque. Quisque et felis id nunc rhoncus ornare et a tortor. Curabitur augue nisl, mattis fermentum ullamcorper vel, porta ultricies tortor. Sed et egestas lectus. Suspendisse non est lacinia felis accumsan laoreet. Ut tortor diam, tristique eget venenatis eget, vulputate suscipit metus. Mauris interdum justo quis velit adipiscing sit amet vehicula justo suscipit.</div>
		
	        </div>
	 
	
   </div>
  

            

                   

            <div id="footer">
                  ©Konrad Dymek 2012
                  
              </div>    

</div>
</body>

</html> '
?>
