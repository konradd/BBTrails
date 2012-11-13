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
	print ("<title>$title</title>")
  
  
  print ("<link rel="stylesheet" type="text/css" href="style.css" />")  

 print ("</head>")

 print ("<div id="wrapper">")

    print ("<div id="logo">")

    print ("</div>")

    

        print ("<div id="menu">")
			        print ("<ul>")
      print ("<li><a href="http://www.kondzios230.bikestats.pl">")
      print ("Główna")
      print ("<span></span></a></li>")
      
      print ("<li><a href="http://www.bikestats.pl/rowery/Roman_6645_10291.html">")
      print ("Rower")
      print ("<span></span></a></li>")
      
      print ("<li><a href="http://www.bikestats.pl/">")
	  print ("Bikestats")
      print ("<span></span></a></li>")
      
      print ("<li><a href="http://kondzios230.bikestats.pl/index.php?category=15244">")
      print ("Sprzęt")
      print ("<span></span></a></li>")
      
      print ("<li><a href="http://kondzios230.bikestats.pl/index.php?category=15245">")
      print ("Teren")
	  print ("<span></span></a></li>")
      
      print ("<li><a href="http://kondzios230.bikestats.pl/index.php?category=15247">")
      print ("Asfalty")
	  print ("<span></span></a></li>")
       
         print ("</ul>")

        

        print ("</div>")

            print ("<div id="right">")

$query6  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 1";
$result6 = mysql_query($query6)
    or die("Query6 failed");
    
print ("<h1>Góry Świętokrzyskie</h1><ul>");  
  
while ($row = mysql_fetch_array($result6)) {
	$ad= $row["Adres"];  	 
	echo "<li><a href=$ad>" . $row["Podpasmo"]  .
	     "</a></li>" ;
}
print ("</ul>");	   

$query7  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 2";
$result7 = mysql_query($query7)
    or die("Query7 failed");
    
print ("<h1>Karpaty</h1><ul>");  
  
while ($row = mysql_fetch_array($result7)) {
	$ad= $row["Adres"];  	 
	echo "<li><a href=$ad>" . $row["Podpasmo"]  .
	     "</a></li>" ;
}
print ("</ul>");	 	     
    
$query8  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 3";
$result8 = mysql_query($query8)
    or die("Query8 failed");
    
print ("<h1>Sudety</h1>");  
print ("<ul>");
while ($row = mysql_fetch_array($result8)) {
	$ad= $row["Adres"];  	 
	echo "<li><a href=$ad>" . $row["Podpasmo"]  .
	     "</a></li>" ;
}	     
print ("</ul>");    
                                                    
        print ("</div>")          
  
            print ("<div id="main">")
            
	print ("<div id="data">")
		 print ("<div id="through">")
		  print ("ABC<br />ADDA")
		 print ("</div>")
		  			
	 print ("<h1>Zielony szlak</h1>")
     print ("<h2>Kozia Góra - Beskid Śląski</h2>")
     print ("6 km <br />")
     print ("100 m  <img src="Grafiki/pion.png"/> <br />")
     
      print ("<div id="trudn">")
	   print ("<h1>Trudność:</h1>")
       print ("7<sup>/10</sup>")
      print ("</div>")
      
      print ("<div id="fun">")
       print ("<h1>Fun:</h1>");
       print ("8<sup>/10</sup>");
      print ("</div>");
      
       
    
		print ("<iframe src="http://osm.trail.pl/embed?ll=19.053125381469727%2C+49.779878500562425&amp;l1=Zielony+szlak&amp;l2=Bielsko-Bia%C5%82a+-+Kozia+G%C3%B3ra&amp;l3=Beskid+%C5%9Al%C4%85ski&amp;w=400&amp;h=400&amp;z=14&amp;m=1" frameborder="0" width="400" height="400"></iframe>");
		print ("</div>");
			print ("<div id="opis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor risus. Nam pulvinar, dolor non posuere tincidunt, augue tellus facilisis justo, quis posuere nulla orci quis elit. Nam vestibulum, lectus et scelerisque commodo, lacus neque convallis nibh, nec lobortis ligula odio at tortor. Morbi et dignissim metus. Fusce nec metus elit, at vehicula nisl. Donec nec accumsan risus. Mauris egestas fringilla orci vitae varius. Mauris ultrices mattis ultrices. Proin dapibus dolor eu tortor tristique ut porttitor eros pellentesque. Aenean leo urna, mollis vel consectetur sit amet, venenatis id sapien. Vivamus auctor facilisis orci nec molestie. Suspendisse potenti. ");

print ("Etiam commodo quam non ligula pharetra pellentesque. Quisque et felis id nunc rhoncus ornare et a tortor. Curabitur augue nisl, mattis fermentum ullamcorper vel, porta ultricies tortor. Sed et egestas lectus. Suspendisse non est lacinia felis accumsan laoreet. Ut tortor diam, tristique eget venenatis eget, vulputate suscipit metus. Mauris interdum justo quis velit adipiscing sit amet vehicula justo suscipit.</div>");
		
	        print ("</div>");
	
	 
	
   print ("</div>");
  

            

                   

            print ("<div id="footer">");
                  print ("©Konrad Dymek 2012");
                  
              print ("</div>");

print ("</div>");
print ("</body>");

print ("</html>");
?>
