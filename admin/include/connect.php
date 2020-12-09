<?php

function connectdb()
{
   $conn= mysqli_connect('localhost','root','','blogpost');
   return $conn;
}


?>