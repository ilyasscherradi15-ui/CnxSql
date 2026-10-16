<?php
function Connexion($serv = "localhost", $user = "root", $pass = "", $bd = "tp-visiteurs")
{
    return mysqli_connect($serv, $user, $pass, $bd);
    
}