<?php
include('connect.php');
session_start();
if(!isset($_POST["connectbtn"]) && isset($_POST["cancelbtn"]))
          {header('Location: index.php');
          exit();}
else if(isset($_POST["connectbtn"]) && !isset($_POST["cancelbtn"]))
          {if(!empty($_POST["InputEmail"]) && !empty($_POST["InputPassword"]))
              {include('connectbdd.php');
               $error=connect($bd,$_POST["InputEmail"],$_POST["InputPassword"]);}
           else
              {$error="entrer vos information";}
          }
  
?>
