<!DOCTYPE html>
<html>
<body>

<?php if(empty($_POST)) { ?>
    <form action="" method="POST">
        Order<br>
        <input type="text" name="order" placeholder="Order?">
        <br><br>
        <input type="submit" value="Submit">
    </form>
<?php } else { ?>
    <?php echo "order";?>
<?php } ?>
</body>
</html>