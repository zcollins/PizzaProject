<!DOCTYPE html>
<html>
<body>

<?php if(empty($_POST)) { ?>
    <form action="" method="POST">
        Order<br>
        <label for="size">Crust Size</label>
        <select  name="size">
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <br />
        <input type="text" name="type" placeholder="cheese or bbq">
        <br />
        <input type="deliverySpeed" name="deliverySpeed" placeholder="by bicycle or jetpack?">
        <input type="submit" value="Order">
    </form>
<?php } else { ?>
    <?php
    $total = 0;
    if($_POST['size']=='medium') {
       $total+= $total+10;
    }
    elseif($_POST['size']=='large')    {
        $total+= $total+15;
    };
    if($_POST['type']=='cheese')    {
        $total+= $total+4;
    }
    elseif($_POST['type']=='bbq')    {
        $total+= $total+5;
    }
    if($_POST['deliverySpeed']=='bicycle')   {
        $total+= $total+10;
    }
    elseif($_POST['deliverySpeed']=='jetpack')    {
        $total+= $total+35000;
    };
        echo $total;
    ?>
<?php } ?>
</body>
</html>