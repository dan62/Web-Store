<?php
$server = @mysql_connect("localhost", "root", ""); 
  $db = mysql_select_db("shop_updated", $server); 
  //$query = mysql_query("SELECT * FROM products");
  $query = mysql_query("SELECT * FROM orders WHERE p_status='Completed';"); 
  $unapproved = mysql_query("SELECT * FROM orders WHERE p_status='pending';");
  $total_orders = mysql_query("SELECT * FROM orders");
  
  $conversions = (mysql_num_rows($query)/mysql_num_rows($total_orders))*100 ;
  
  $todo = mysql_query("SELECT title, description FROM todo_list");
  $network_activities = mysql_query("SELECT full_name, activity_completed FROM user_activity");
  
  $check_moday = mysql_query("SELECT * FROM orders WHERE day='monday';");
  $mon = mysql_num_rows($check_moday);
  
  $check_tue = mysql_query("SELECT * FROM orders WHERE day='tuesday';");
  $tue = mysql_num_rows($check_tue);
  
  $check_wed = mysql_query("SELECT * FROM orders WHERE day='wednesday';");
  $wed = mysql_num_rows($check_wed);
  $x=1;
  if($x=1){
	$updateview = mysql_query("update website_views set total_visit = total_visit+1 where page='store' ");
  }
	$number_views = mysql_query("SELECT total_visit FROM website_views WHERE page = 'shop';");
	
$total_sales = mysql_query("SELECT Sum(products.product_price) AS SumOfproduct_price 
FROM   products 
       INNER JOIN (orders 
                   INNER JOIN order_item 
                           ON orders.order_id = order_item.order_id) 
               ON products.product_id = order_item.product_id; ");

$sales_o = mysql_query("SELECT orders.order_id, 
       user_info.user_id, 
       products.product_title, 
       order_item.quantity, 
       orders.trx_id, 
       orders.p_status, 
       Sum(products.product_price) AS SumOfproduct_price 
FROM   user_info 
       INNER JOIN (products 
                   INNER JOIN (orders 
                               INNER JOIN order_item 
                                       ON orders.order_id = order_item.order_id) 
                           ON products.product_id = order_item.product_id) 
               ON user_info.user_id = orders.user_id 
GROUP  BY orders.order_id, 
          user_info.user_id, 
          products.product_title, 
          order_item.quantity, 
          orders.trx_id, 
          orders.p_status 
HAVING (( ( orders.p_status ) = 'completed' ));");
  
?>