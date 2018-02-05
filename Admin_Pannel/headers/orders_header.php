<?php
  $server = @mysql_connect("localhost", "root", ""); 
  $db = mysql_select_db("shop_updated", $server); 
  $query = mysql_query("SELECT orders.order_id, 
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
HAVING (( ( orders.p_status ) = 'pending' ))"); 
?>