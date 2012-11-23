#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
#  bez nazwy.py
#  
#  Copyright 2012 Konrad Dymek <konraddymek@gmail.com>
#  
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation; either version 2 of the License, or
#  (at your option) any later version.
#  
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#  
#  You should have received a copy of the GNU General Public License
#  along with this program; if not, write to the Free Software
#  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
#  MA 02110-1301, USA.
#  
#  


txt=open("text.txt","r")
gl_tab=[]
for line in txt.readlines():
	tab=line.split("\t")
	dic={"ID":" ", "Rodzaj":" ","Pasmo":" ","Kolor":" ", "Start":" ", "Koniec":" ", "Przez_I":" ", "Przez_II":" ", "Przez_III":" ", "Trudnosc":" ", "Fun":" ", "Opis":" ", "Dlugosc":" ", "Pion":" ", "Mapa":" ", "Adres":" "}
	dic["ID"]=tab[3]
	dic["Rodzaj"]=tab[4]
	dic["Pasmo"]=tab[5]
	dic["Kolor"]=tab[6]
	dic["Start"]=tab[7]
	dic["Koniec"]=tab[8]
	dic["Przez_I"]=tab[9]
	dic["Przez_II"]=tab[10]
	dic["Przez_III"]=tab[11]
	dic["Trudnosc"]=tab[12]
	dic["Fun"]=tab[13]
	dic["Opis"]=tab[14]
	dic["Dlugosc"]=tab[15]
	dic["Pion"]=tab[16]
	dic["Mapa"]=tab[17]
	dic["Adres"]=tab[18]
	gl_tab.append(dic)
		
	
for trail in gl_tab:
	number=trail["Koniec"]
	php=open(str(number)+".php","w")
	text="""<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
	$id=%d;
//PASEK - KOLOR/SZCZYT
	global $id;
	$query1  = "SELECT Trasy.Kolor, Kolory.Kolor FROM Trasy, Kolory WHERE Trasy.ID=$id AND Kolory.ID=Trasy.Kolor";
	$result1 = mysql_query($query1)
	    or die("Query1 failed");
	while ($row = mysql_fetch_array($result1)) 
		$color= $row["Kolor"];	
		print ("<title>$color");
	$query0  = "SELECT Trasy.Koniec, Szczyty.Szczyt FROM Trasy, Szczyty WHERE Trasy.ID=$id AND Szczyty.ID=Trasy.Koniec";
	$result0 = mysql_query($query0)
	    or die("Query0 failed");
	while ($row = mysql_fetch_array($result0)) 
		$end= $row["Szczyt"];	
		print (" - $end</title>");
	

  
echo '  
  <link rel="stylesheet" type="text/css" href="/.../.../.../style.css" />
  <link rel="icon" href="/.../.../.../Grafiki/favicon.png" />   

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
//MAPA    
	 $query11  = "SELECT Trasy.Mapa FROM Trasy WHERE Trasy.ID=$id ";
	 $result11 = mysql_query($query11)
		 or die("Query11 failed");
	 while ($row = mysql_fetch_array($result11)) 
	 $map= $row["Mapa"];
		 print ('<div id="none"><div id="map">');
	 	 print ("$map</div>");
	 	 	

echo '		<div id="data">
			';

	
//KOLOR
	global $color;
	print ("<h1>$color</h1>");
	
	  			
// SZCZYT - PASMO
     global $end;
     print ("<h2> $end ");
     $query6  = "SELECT Trasy.Pasmo, Podpasma.Podpasmo FROM Trasy, Podpasma WHERE Trasy.ID=$id AND Podpasma.ID=Trasy.Pasmo";
	 $result6 = mysql_query($query6)
		 or die("Query6 failed");
	 while ($row = mysql_fetch_array($result6)) 
	 $range= $row["Podpasmo"];	
	 print (" - $range</h2>");

     
 
// DŁUGOŚĆ - PRZEWYŻSZENIE
	 $query7  = "SELECT Trasy.Dlugosc FROM Trasy WHERE Trasy.ID=$id ";
	 $result7 = mysql_query($query7)
		 or die("Query7 failed");
	 while ($row = mysql_fetch_array($result7)) 
	 $lenght= $row["Dlugosc"];
	 	 print ("$lenght km       ");
	 $query8  = "SELECT Trasy.Pion FROM Trasy WHERE Trasy.ID=$id ";
	 $result8 = mysql_query($query8)
		 or die("Query8 failed");
	 while ($row = mysql_fetch_array($result8)) 
	 $vert= $row["Pion"];
	 print ("    $vert m  ");
	 print ('<img src="Grafiki/pion.png"/> <br />');
	 
echo'    
      <div id="trudn">
	   <h1>Trudność:</h1>';
	   
//TRUDNOSC - FUN
	 $query9  = "SELECT Trasy.Trudnosc FROM Trasy WHERE Trasy.ID=$id ";
	 $result9 = mysql_query($query9)
		 or die("Query9 failed");
	 while ($row = mysql_fetch_array($result9)) 
	 $lvl= $row["Trudnosc"];
	 	 print ("$lvl<sup>/10</sup> </div>");
	 $query10  = "SELECT Trasy.Fun FROM Trasy WHERE Trasy.ID=$id ";
	 $result10 = mysql_query($query10)
		 or die("Query10 failed");
	 while ($row = mysql_fetch_array($result10)) 
	 $funn= $row["Fun"];
	 print ('<div id="fun"> <h1>Fun:</h1>');
	 print ("$funn<sup>/10</sup></div>");    
 
//PRZEZ
	print ('<div id="through">');
	$query5  = "SELECT Trasy.Przez_I, Trasy.Przez_II, Trasy.Przez_III FROM Trasy WHERE Trasy.ID=$id";
	$result5 = mysql_query($query5)
		or die("Query5 failed");
	while ($row = mysql_fetch_array($result5)) 
		for ($i=1; i>3; $i++)
			$through=$row[$i];
			if ($through!="NULL")
				print ("$through<br />");
		
	print	 ("</div></div></div>");           

		 
//OPIS
	 $query12  = "SELECT Trasy.Opis FROM Trasy WHERE Trasy.ID=$id ";
	 $result12 = mysql_query($query12)
		 or die("Query12 failed");
	 while ($row = mysql_fetch_array($result12)) 
	 $txt= $row["Opis"];
	 	 print ('<div id="opis">');	
	 	 print ("$txt </div>");
 
echo'			
	 
	
   </div>
  

            

                   

            <div id="footer">
                  ©Konrad Dymek 2012
                  
              </div>    

</div>
</body>

</html> '
?>
""" %int(number)
	php.write(text)
	php.close()
