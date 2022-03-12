<?php

   $con = "dbname=dc689gh097f9aa host=ec2-54-195-76-73.eu-west-1.compute.amazonaws.com port=5432 user=gafasduyiu password=05c99a0c8989be996391a6cc8f3d9614e46da60f78e9c12bafb7dc66964e35b9 sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }

?>