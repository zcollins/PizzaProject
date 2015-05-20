<!DOCTYPE html>
<html>
<body>

<?php if(empty($_POST)) { ?>
    <form action="" method="POST">
        Order<br>
        <input type="text" name="size" placeholder="medium or large?">
        <br />
        <input type="text" name="type" placeholder="cheese or bbq">
        <br />
        <input type="deliverySpeed" placeholder="by bicycle or jetpack?">
        <input type="submit" value="Order">
    </form>
<?php } else { ?>
    <?php
        $total = 0;
    if($_POST['order']=='medium') {
       $total+= $total+10;
    }
    elseif($_POST['order']=='large')    {
        $total+= $total+15;
    }
    if($_POST['type']=='cheese') {
        $total+= $total+2;
    }
    elseif($_POST['type']=='bbq')    {
        $total+= $total+5;
    }
    if($_POST['deliverySpeed']=='bicycle') {
        $total+= $total+10;
    }
    elseif($_POST['deliverySpeed']=='jetpack')    {
        $total+= $total+35000;
    }

        echo $_POST["$total"];
    ?>
<?php } ?>
</body>
</html>