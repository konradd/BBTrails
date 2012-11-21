<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  

  <title>Best Bike Trails</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    

 </head>

 <body>

 

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

            <div id="right">

            <?php

$link = mysql_connect("mysql3.ph-hos.osemka.pl", "1352208389_f", "1Bond007")
    or die("Could not connect");
mysql_query('SET NAMES utf8');
mysql_select_db("1206275_trails")
    or die("Could not select database");


$query1  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 1";
$result1 = mysql_query($query1)
    or die("Query1 failed");
    
print ("<h1>Góry Świętokrzyskie</h1><ul>");  
  
while ($row = mysql_fetch_array($result1)) {
	$ad= $row["Adres"];  	 
	echo "<li><a href=$ad>" . $row["Podpasmo"]  .
	     "</a></li>" ;
}
print ("</ul>");	 	     



$query2  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 2";
$result2 = mysql_query($query2)
    or die("Query2 failed");
    
print ("<h1>Karpaty</h1><ul>");  
  
while ($row = mysql_fetch_array($result2)) {
	$ad= $row["Adres"];  	 
	echo "<li><a href=$ad>" . $row["Podpasmo"]  .
	     "</a></li>" ;
}
print ("</ul>");	 	     
    
$query3  = "SELECT Pasma.Pasmo, Podpasma.Podpasmo, Podpasma.Adres FROM Podpasma, Pasma WHERE Podpasma.ABC = Pasma.id AND Pasma.id = 3";
$result3 = mysql_query($query3)
    or die("Query3 failed");
    
print ("<h1>Sudety</h1>");  
print ("<ul>");
while ($row = mysql_fetch_array($result3)) {
	$ad= $row["Adres"];  	 
	echo "<li><a href=$ad>" . $row["Podpasmo"]  .
	     "</a></li>" ;
}	     
print ("</ul>");	     


mysql_free_result($result);
mysql_close($link);

?>    
                                                    
        </div>          
  
            <div id="main">             
          
	 
	        </div>
	 
	
   </div>
  

            

                   

            <div id="footer">
                  ©Konrad Dymek 2012
                  
              </div>    

</div>
</body>

</html>


