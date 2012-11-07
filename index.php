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

                
                                                    
        </div>          
  
            <div id="main">             
          <?php


$link = mysql_connect("mysql3.ph-hos.osemka.pl", "1352208389_f", "1Bond007")
    or die("Could not connect");
mysql_query('SET NAMES utf8');
mysql_select_db("1206275_trails")
    or die("Could not select database");

$query  = "SELECT * FROM Podpasma";
$result = mysql_query($query)
    or die("Query failed");

while ($row = mysql_fetch_array($result)) {
    echo "<TR><TD>" . $row["ID"]  .
         ":" .
         "</TD><TD>" . $row["Podpasmo"] .
         "</TD><TD>" . $row["Podpasma"][$row["Pasmo"]] .
         "</TD></TR>".
}

mysql_free_result($result);
mysql_close($link);

?>
	 
	        </div>
	 
	
   </div>
  

            

                   

            <div id="footer">
                  ©Konrad Dymek 2012
                  
              </div>    

</div>
</body>

</html>


