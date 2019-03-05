<?php
   $servername = "localhost";
   $username = "al";
   $password = "pass123";
   $dbname = "UserLoginID";   

   $mun = "atalasbekova@icstars.org";
   $mps = "111";

   $conn = mysql_connect($servername, $username, $password, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT * FROM members WHERE email = '$mun'";
   mysql_select_db('UserLoginID');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "Validated the following user :{$row['email']}";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
