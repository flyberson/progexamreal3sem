Martin Erik Hilaire     Email= mart264m@edu.easj.dk
Datamatiker 3 sem eksamen

ting der skal ændres for at det virker for dig

requireLogin.php linje 15 header("Location:http://localhost/PhpstormProjects/progexamreal3sem/login.php");
Skal mappes til din url

login.php linje 30  header("Location:http://localhost/PhpstormProjects/progexamreal3sem/index.php");
Skal mappes til din url

databaseconnection.php linje 3-6
$servername = "localhost";
$username = "root";
$password = "yoyo";
$dbname = "explorecalifornia";

Skal ændres til din database config


ext/manifest.json linje 17
,
  "permissions": [
"https://localhost/PhpstormProjects/explore_california_api.php/tours"
  ]

  Skal ændres til din mapping



  ext/js/api.js linje 12
  var Json= "http://localhost/PhpstormProjects/progexamreal3sem/explore_california_api.php/tours";
  Skal ændres til din mapping

  progexamreal3sem/java/src/UrlReader.java linje 9
   URL api = new URL("http://localhost/PhpstormProjects/progexamreal3sem/explore_california_api.php/tours");
   Skal ændres til din mapping for api

opgave 11)
google cloud
https://progexamreal3sem.appspot.com/index.php
virker ikke pt pga login og manglende database. Har fjernet login på cloud

opgave 10)
github
https://github.com/flyberson/progexamreal3sem

opgave 1)
databaseconnection.php

opgave 2)
index.php

opgave 3)
login.php
&
requireLogin.php

opgave 4)
index.php

opgave 5)
explore_california_api.php
kaldes ved
GET explore_california_api.php/tablename

opgave 6)
 Det her er en rest api med kun get kald
jeg kan lave en if statement der kigger efter put delete og andre http requests


opgave 7)
ext mappen

opave 8)
databasesikkerhed.txt

opgave 9)
brugerdata.txt

opgave 12)
progexamreal3sem/java/jsonmain.java