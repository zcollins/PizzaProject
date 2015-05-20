<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
    Order<br>
    <input type="text" name="order" value="Order?">
    <br><br>
    <input type="submit" value="Submit">
    <?php $_POST["$order"] ?>
    <?php print_r($_POST) ?>
</form>


</body>
</html>