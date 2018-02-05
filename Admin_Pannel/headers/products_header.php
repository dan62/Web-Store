<?php
  $server = @mysql_connect("localhost", "root", ""); 
  $db = mysql_select_db("shop_updated", $server); 
  //$query = mysql_query("SELECT * FROM products");
  $query = mysql_query("SELECT products.product_id, categories.cat_title, products.product_title, products.product_price, products.product_desc, products.product_keywords FROM categories INNER JOIN products ON categories.cat_id = products.product_cat 
ORDER  BY products.product_id;"); 
?>