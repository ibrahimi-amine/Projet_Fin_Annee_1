<?php
session_start();
if($_SESSION['etat']!="connected")
    {
      header('Location: index.php');exit();
    }








?>
