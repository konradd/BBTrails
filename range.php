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
	$id=21;
//PASEK - PASMO
	global $id;
	$query1  = "SELECT Podpasma.Podpasmo FROM Podpasma WHERE Podpasma.ID=$id ";
	$result1 = mysql_query($query1)
	    or die("Query1 failed");	    
	while ($row = mysql_fetch_array($result1)) 
		$range= $row["Podpasmo"];	
		print ("<title>$range</title>");
	

  
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

	<div id="main">';
	
global $range;	
print ("<h1>$range</h1><h5>Szczyty:</h5><ul>");

$query5  = "SELECT Szczyty.Szczyt, Szczyty.ID FROM Szczyty WHERE Szczyty.Pasmo=$id";
	$result5 = mysql_query($query5)
	    or die("Query5 failed");
	while ($row = mysql_fetch_array($result5))
		{
		$hill=$row["Szczyt"];
		echo ("<li><a href=>$hill</li>");	     
		}
	print("</ul>");


echo '   </div>
  

            

                   

            <div id="footer">
                  ©Konrad Dymek 2012
                  
              </div>    

</div>
</body>

</html>
';
