<?php
  $server = @mysql_connect("localhost", "root", ""); 
  $db = mysql_select_db("shop_updated", $server); 
  $query = mysql_query("SELECT * FROM categories"); 
?>