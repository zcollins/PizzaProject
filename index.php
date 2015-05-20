
/* checkboxes for toppings,
fill out the rest
Look into reading and writing files*/
<!DOCTYPE html>
<html>
<body>

<?php if(empty($_POST)) { ?>
    <form action="" method="POST">
        Order<br>
        <label for="size">Crust Size</label>
        <select  name="size">
            <option value="small">Medium</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <br />
        <input type="checkbox" name="toppings" value="pepperoni">Pepperoni<br />
        <input type="checkbox" name="toppings" value="bbq">BBQ<br />
        <input type="checkbox" name="toppings" value="Hawaiian">Hawaiian<br />
        <input type="checkbox" name="toppings" value="steak">Steak<br />
        <br />

        <label for="delivery">Delivery Method</label>
        <select  name="delivery">
            <option value="train">Train</option>
            <option value="plane">Medium</option>
            <option value="automobile">Large</option>
        </select>
    </form>
<?php } else {
    $pricing = array(
        'sizes' => array(
            'small' => 5,
            'medium' => 10,
            'large' => 15
        ),
        'toppings' => array(
            'pepperoni' => 9,
            'bbq' => 10,
            'Hawaiian' => 5,
            'steak' => 16
        ),
        'deliveryMethods' => array(
            'train' => 10,
            'plane' => 20,
            'automobile' => 5
        )
    );

    $total = 0;
    echo $total;
} ?>
</body>
</html>