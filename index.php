<html>
    <body>
         <form action="" method="get">
             Order? <input type="text" value = "order" name="order"><br>
             <input type="submit">
             <?php

            $order = $_POST['order'];
             print($order);

             ?>
         </form>
    </body>
</html>



