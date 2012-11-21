<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <?php
//DATABASE
	$link = mysql_connect("mysql3.ph-hos.osemka.pl", "1352208389_f", "1Bond007")
	    or die("Problemy z bazą danych, odśwież stronę kilkukrotnie, powinno pomóc<br /> Admin");
	mysql_query('SET NAMES utf8');
	mysql_select_db("1206275_trails")
	    or die("Could not select database");
	$id=2;
//PASEK - SZCZYT
	global $id;
	$query0  = "SELECT Szczyty.Szczyt FROM Szczyty WHERE Szczyty.ID=$id ";
	$result0 = mysql_query($query0)
	    or die("Query0 failed");
	while ($row = mysql_fetch_array($result0)) 
		$hill= $row["Szczyt"];	
		print ("<title>$hill</title>");
	

  
echo '  
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="icon" href="/Grafiki/favicon.png" />   

 </head>

<div id="wrapper">

    <div id="logo">

    </div>

    

        <div id="menu">
			        <ul>
      <li><a href="/index.php"> 
      Główna
      <span></span></a></li>
      <li><a href="/podstrony/karty/about.php"> 
      O projekcie
      <span></span></a></li>
      <li><a href="/podstrony/karty/contact.php">
	  Kontakt
      <span></span></a></li>
      
         </ul>

        

        </div>

            <div id="right"> ';
//PASMA/PODPASMA            
	$query2  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 1";
	$result2 = mysql_query($query2)
	    or die("Query2 failed");
	    
	print ("<h1>Góry Świętokrzyskie</h1><ul>");    
	while ($row = mysql_fetch_array($result2)) {
		$ad= $row["Adres"];  	 
		echo "<li><a href=$ad>" . $row["Podpasmo"]  .
		     "</a></li>" ;
	}
	print ("</ul>");	 	     
	
	
	
	$query3  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 2";
	$result3 = mysql_query($query3)
	    or die("Query3 failed");
	    
	print ("<h1>Karpaty</h1><ul>");    
	while ($row = mysql_fetch_array($result3)) {
		$ad= $row["Adres"];  	 
		echo "<li><a href=$ad>" . $row["Podpasmo"]  .
		     "</a></li>" ;
	}
	print ("</ul>");	
	 	     
	    
	$query4  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 3";
	$result4 = mysql_query($query4)
	    or die("Query4 failed");
	    
	print ("<h1>Sudety</h1>");  
	print ("<ul>");
	while ($row = mysql_fetch_array($result4)) {
		$ad= $row["Adres"];  	 
		echo "<li><a href=$ad>" . $row["Podpasmo"]  .
		     "</a></li>" ;
	}	     
	print ("</ul>");

        
                                                    
echo ' </div>          

	<div id="main">
		';
//NAGLOWEK
	global $hill;
	print ("<h3>$hill</h3>");
	
//PASMO
	 $query5  = "SELECT Szczyty.Pasmo, Podpasma.Podpasmo FROM Szczyty, Podpasma WHERE Szczyty.ID=$id AND Podpasma.ID=Szczyty.Pasmo";
	 $result5 = mysql_query($query5)
		 or die("Query5 failed");
	 while ($row = mysql_fetch_array($result5)) 
	 $range= $row["Podpasmo"];
	 print("<h4>$range</h4>");
	 
//SZLAKI
	$query6  = "SELECT Trasy.Kolor, Trasy.Start, Trasy.Adres, Kolory.Kolor FROM Trasy, Kolory WHERE Trasy.Koniec=$id AND Kolory.ID=Trasy.Kolor";
	$result6 = mysql_query($query6)
	    or die("Query6 failed");
	print("<h5>Szlaki:</h5><ul>");
	while ($row = mysql_fetch_array($result6))
		{
		$trail=$row["Kolor"];
		$ad=$row["Adres"];
		$begin=$row["Start"];
		$query7  = "SELECT Miasta.Miasto FROM Miasta WHERE Miasta.ID=$begin";
		$result7 = mysql_query($query7)
			or die("Query7 failed");
		$roow = mysql_fetch_array($result7);
		$city=$roow["Miasto"];
	 	echo ("<li><a href=$ad><strong>$trail</strong> - $city</a></li>");	     
		}
	print("</ul>");

	
	  			

 
echo'			
	 
	
   </div>
  

            

                   

            <div id="footer">
                  ©Konrad Dymek 2012
                  
              </div>    

</div>
</body>

</html> '
?>
